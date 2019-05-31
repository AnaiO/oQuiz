<?php
namespace App\Http\Controllers;

use App\Quiz;
use App\Question;
use App\Http\Controllers\Controller;

class QuizController extends Controller 
{
    public function showQuiz($id)
    {
        $quizInfos = Quiz::find($id);
        $questionsCollection = Question::Where('quizzes_id', $id)
                                        ->get();
        // $questionLevel = 


        dump($questionsCollection);

        return view('quiz', [
            'quizInfos' => $quizInfos,
            'questionsCollection' => $questionsCollection

        ]);
    }
}