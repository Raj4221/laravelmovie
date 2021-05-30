<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\eventregister;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class sendmailverification
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
     * @param  object  $event
     * @return void
     */
    public function handle(eventregister $event)
    {
        $msg = "Thank You For Register. "." welcome  " . $event->data['name'].",email: ". $event->data['email'].",pasword: ".$event->data['password'];
        Mail::to($event->data['email'])->send(new SendMail($msg));
    }
}
