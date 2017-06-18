<?php

namespace App\Repositories;
use App\User;

/**
 * Class UserRepository
 *
 * @package \App\Repositories
 */
class UserRepository
{
    public function byId($id)
    {
        return User::findOrFail($id);
    }
}
