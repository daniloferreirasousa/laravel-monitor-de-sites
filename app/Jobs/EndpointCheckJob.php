<?php

namespace App\Jobs;

use App\Models\Endpoint;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Client\ConnectionException;

class EndpointCheckJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Endpoint $endpoint,
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $url = $this->endpoint->url();

        try {
            $response = Http::get($url);

            $this->endpoint->checks()->create([
                'status_code'   => $response->status(),
                'response_body' => $this->responseBody($response),
            ]);
        } catch(ConnectionException $e) {
            $this->endpoint->checks()->create([
                'status_code'   => 0,
                'response_body' => "Erro de conexão: {$e->getMessage()}",
            ]);
        } catch (Exception $e) {
            $this->endpoint->checks()->create([
                'status_code'   => 500,
                'response_body' => "Erro durante a requisição: {$e->getMessage()}",
            ]);
        }

        $this->endpoint->update([
            'next_check' => $this->nextCheck(),
        ]);
    }


    private function nextCheck()
    {
        $next = now()->addMinutes($this->endpoint->frequency);
        return $next;
    }

    private function responseBody(Response $response): string|null
    {
        if ($response->successful()) {
            return null;
        }

        return (string) $response->body();
    }
}
