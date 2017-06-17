<?php
namespace App\Repositories;

use App\Topic;
use App\Question;

/**
 * Class QuestionRepositories
 *
 * @package \Repositories
 */
class QuestionRepository
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public function byIdWithTopicsAndAnswers($id)
    {
        return Question::with(['topics','answers'])->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return Question::create($attributes);
    }

    public function normalizeTopic(array $topics)
    {
        return collect($topics)->map(function ($topic){
            if( is_numeric($topic) ){
                Topic::find($topic)->increment('questions_count');
                return (int)$topic;
            }
            $newTopic = Topic::create(['name' => $topic,'questions_count' => 1]);
            return $newTopic->id;
        })->toArray();
    }

    public function byId($id)
    {
        return Question::findOrFail($id);
    }

    public function getQuestionsFeed()
    {
        return Question::published()->latest('updated_at')->with('user')->get();
    }
}
