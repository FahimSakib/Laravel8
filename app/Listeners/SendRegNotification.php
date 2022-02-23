<?php

namespace App\Listeners;

use App\Events\NewUser;
use App\Jobs\SendWelcomeMailJob;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewUser  $event
     * @return void
     */
    public function handle(NewUser $event)
    {
        
        SendWelcomeMailJob::dispatch($event->user)->delay(now()->addSeconds(10));
    }
}
