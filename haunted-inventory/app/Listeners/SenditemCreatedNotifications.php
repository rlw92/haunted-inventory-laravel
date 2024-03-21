<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\itemCreated;
use App\Notifications\Newitem;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SenditemCreatedNotifications implements ShouldQueue
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
    public function handle(itemCreated $event): void
    {
        //
        foreach (User::whereNot('id', $event->items->user_id)->cursor() as $user) {
            $user->notify(new Newitem($event->items));
        }
    }
}
