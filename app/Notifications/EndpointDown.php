<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Check;
use Carbon\Carbon;

class EndpointDown extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        protected Check $check,
    ) { }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $endpoint   = $this->check->endpoint;
        $site       = $endpoint->site;

        return (new MailMessage)
                    ->error()
                    ->subject("Site com erro ({$site->url})")
                    ->greeting("Olá, {$notifiable->name}")
                    ->line("O endpoint {$endpoint->endpoint} está com erro {$this->check->status_code}")
                    ->line("Data e Hora do erro: {$this->check->created_at}")
                    ->action('Visualizar Detalhes do Erro', route('endpoints.index', $site->id))
                    ->line('Obrigador por utilizar nossa Aplicação!')
                    ->line("Esta é uma mensagem automática do sistema, por favor, não responda!");
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
