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
        $note = 0;
        $quizInfos = Quiz::find($id);

        foreach ($_POST as $questionId => $answerId)
        {
            $question = Question::find($questionId);

            if($question->answers_id == $answerId){
                $note += 1;
            }

            $correctAnswer = self::getCorrectAnswer($questionId);
            $postAnswer = self::getPostAnswer($answerId);
            $answers[$postAnswer] = $correctAnswer;
        }
        
        return view('quiz', [
            'id' => $id,
            'note' => $note,
            'quizInfos' => $quizInfos,
            'answers' => $answers
            ]);
    }

    public function getCorrectAnswer($questionId)
    {
        $question = Question::find($questionId);
        $correctAnswer = $question->answer->description;
        return $correctAnswer;
    }

    public function getPostAnswer($answerId)
    {
        $answer = Answer::find($answerId);
        $postAnswer = $answer->description;
        return $postAnswer;
    }

    

   
}