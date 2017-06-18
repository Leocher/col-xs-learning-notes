<?php

namespace App\Channels;
use Illuminate\Notifications\Notification;

/**
 * Class SendcloudChannel
 *
 * @package \App\Channels
 */
class SendcloudChannel
{
    public function send($notifiable,Notification $notification)
    {
        $message = $notification->toSendcloud($notifiable);
    }
}
