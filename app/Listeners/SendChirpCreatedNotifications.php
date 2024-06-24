<?php

namespace App\Listeners;

use App\Events\ChirpCreated;
use App\Models\User;
use App\Notifications\NewChirp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendChirpCreatedNotifications
//class SendChirpCreatedNotifications implements ShouldQueue
// should use "implements ShouldQueue" - not using it while testing so "php artisan queue:work" isnt needed
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ChirpCreated $event): void 
    {
        /* foreach (User::whereNot('id', $event->chirp->user_id)->cursor() as $user) {
            $user->notify(new NewChirp($event->chirp));
        } */

        Log::info('New Chirp created. Notification for users is commented out.');
        // need to check out logging features and setup in config\logging.php
        // https://laravel.com/docs/11.x/logging
    }
}
