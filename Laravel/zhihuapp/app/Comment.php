<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['user_id','body','commentable_id','commentable_type'];

    public function commentable()
    {
        return $this->morphTo();//多态关系，评论可能属于answer，也可能属于question
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
