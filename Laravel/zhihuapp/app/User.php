<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Naux\Mail\SendCloudTemplate;
use Mail;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','confirmation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $data = ['url' => url('password/reset',$token)];
        $template = new SendCloudTemplate('zhihu_app_password_reset',$data);
        Mail::raw($template,function($message){
            $message->from('test@laravel.com','Laravel');
            $message->to($this->email);
        });
    }

    public function owns(Model $model)
    {
        return $this->id == $model->user_id;
    }
}
