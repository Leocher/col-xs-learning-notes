<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Repositories\QuestionRepository;

/**
 * Class QuestionFollowController
 *
 * @package App\Http\Controllers
 */
class QuestionFollowController extends Controller
{
    /**
     * @var \App\Question
     */
    protected $question;

    /**
     * QuestionFollowController constructor.
     *
     * @param \App\Repositories\QuestionRepository $question
     */
    public function __construct(QuestionRepository $question)
    {
        $this->middleware('auth');
        $this->question = $question;
    }

    /**
     * @param $question
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function follow($question)
    {
        Auth::user()->followThis($question);
        return back();
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function follower(Request $request)
    {
        if(user('api')->followed($request->get('question'))){
            return response()->json(['followed' => true]);
        }
        return response()->json(['followed' => false]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function followThisQuestion(Request $request)
    {
        $question = $this->question->byId($request->get('question'));
        $followed = user('api')->followThis($question);
        if(count($followed['detached']) > 0){
            $question->decrement('followers_count');
            return response()->json(['followed' => false]);
        }
        $question->increment('followers_count');
        return response()->json(['followed' => true]);
    }
}
