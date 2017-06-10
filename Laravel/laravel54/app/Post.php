<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','published'];

    public function archive()
    {
        return $this->update(['published'=>false]);
    }

    public function publish()
    {
        return $this->update(['published'=>true]);
    }
}
