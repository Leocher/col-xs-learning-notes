<?php

namespace App\Repositories;
use App\Comment;

/**
 * Class CommentRepository
 *
 * @package \App\Repositories
 */
class CommentRepository
{
    public function create(array $attributes)
    {
        return Comment::create($attributes);
    }
}
