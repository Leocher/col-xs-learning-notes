<?php

namespace App\Mailer;

use Mail;
use Naux\Mail\SendCloudTemplate;

/**
 * Class Mailer
 *
 * @package \App\Mailer
 */
class Mailer
{
    protected function sendTo($template,$email,array $data)
    {
        $content = new SendCloudTemplate($template,$data);

        Mail::raw($content,function ($message) use ($email) {
            $message->from('laraveek@laravel.com','Laraveek');
            $message->to($email);
        });
    }
}
