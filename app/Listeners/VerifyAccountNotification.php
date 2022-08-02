<?php

namespace App\Listeners;

use App\Events\VerifyAccount;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class VerifyAccountNotification
{

    /**
     * Handle the event.
     *
     * @param  \App\Events\VerifyAccount  $event
     * @return void
     */
    public function handle(VerifyAccount $event)
    {

        Mail::to($event->user['email'])->send(new VerifyEmail($event->user));
    }
}
