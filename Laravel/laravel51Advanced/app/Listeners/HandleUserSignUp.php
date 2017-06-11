<?php

namespace App\Listeners;

use App\Events\UserSignUp;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleUserSignUp
{
    public $filesystem;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * Handle the event.
     *
     * @param  UserSignUp  $event
     * @return void
     */
    public function handle(UserSignUp $event)
    {
        //$this->filesystem->copy();
        //$this->filesystem->append();
        dump($event->user->name.' sign up');
    }
}
