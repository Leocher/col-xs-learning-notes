<?php

namespace App\Repositories;
use App\Answer;

/**
 * Class AnswerRepository
 *
 * @package \App\Repositories
 */
class AnswerRepository
{
    public function create(array $attributes)
    {
        return Answer::create($attributes);
    }

    public function byId($id)
    {
        return Answer::findOrFail($id);
    }
}
