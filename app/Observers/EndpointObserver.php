<?php

namespace App\Observers;

use App\Models\Endpoint;
use Carbon\Carbon;

class EndpointObserver
{
    /**
     * Handle the Endpoint "creating" event.
     */
    public function creating(Endpoint $endpoint): void
    {
        $endpoint->next_check = Carbon::now()->addMinutes($endpoint->frequency);
    }
}
