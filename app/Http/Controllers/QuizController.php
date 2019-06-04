<?php
namespace App\Http\Controllers;

use App\Quiz;
use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizController extends Controller 
{
    /**
     * Quiz page
     *
     * @param int $id Quiz id
     *
     * @return \Illuminate\View\View
     */

    public function showQuiz($id)
    {
        $quizInfos = Quiz::find($id);


        return view('quiz', [
            'quizInfos' => $quizInfos,
        ]);
    }

    public function note(Request $request, $id)
    {
        dump($id);
        dump($_POST);
        $note = 0;

        foreach ($_POST as $questionId => $answerId)
        {
            $question = Question::find($questionId);
            if($question->answers_id == $answerId){
                $note += 1;
            }
           
        }
        return redirect()->route('quizView', [ 
        'id' => $id,
        'note' => $note]);
    }
}