<?php

namespace App\Repositories;

use Request;
use App\Topic;
/**
 * Class TopicRepository
 *
 * @package \App\Repositories
 */
class TopicRepository
{
    public function getTopicsForTagging(Request $request)
    {
        return Topic::select(['id','name'])
            ->where('name','like','%'.$request->query('q').'%')
            ->get();
    }
}
