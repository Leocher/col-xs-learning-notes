<?php

namespace App;

use App\Events\PostWasPublished;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','published'];

    protected $events = [
        'created' => PostWasPublished::class
    ];

    public function archive()
    {
        return $this->update(['published'=>false]);
    }

    public function publish()
    {
        return $this->update(['published'=>true]);
    }
}
