<?php

namespace App\Listeners;

use App\Models\ListenerMailable;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\MailableNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class UserInfoListener implements ShouldQueue
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
    public function handle(object $event): void
    {
        $listenerMailables = ListenerMailable::all();
        Notification::send($listenerMailables, new MailableNotification($event->listenerMailable));
    }
}
