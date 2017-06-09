<?php
namespace App\Notifications;
use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PostPublished extends Notification
{
    use Queueable;
    public $post;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('A Post Published')
                    ->success()
                    ->line('New post on laravist: '.$this->post->title)
                    ->action('Read It Now', url('/post/'.$this->post->id))
                    ->line('Thank you for using our application!');
    }

//    public function toDatabase()
//    {
//        不写这个方法，数据会用toArray()处理
//    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return $this->post->toArray();
    }
}
