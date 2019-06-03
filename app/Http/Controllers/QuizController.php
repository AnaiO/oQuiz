<?php
namespace App\Http\Controllers;

use App\Quiz;
use App\Answer;
use App\Question;
use App\Http\Controllers\Controller;

class QuizController extends Controller 
{
    public function showQuiz($id)
    {
        $quizInfos = Quiz::find($id);

        // $questionsCollection = Question::where('quizzes_id', $id)
        //                                 ->get();
        // $wikiDistinct = Question::where('quizzes_id', $id)
        //                         ->select('wiki')
        //                         ->distinct()
        //                         ->get();
        // $randomWrongAnswers = Answer::where('questions_id', "!=", $id)
        //                                 ->take(3)
        //                                 ->inRandomOrder()
        //                                 ->get();
        //                             dump($randomWrongAnswers);



        

        return view('quiz', [
            'quizInfos' => $quizInfos,
            // 'questionsCollection' => $questionsCollection,
            // 'wikiDistinct' => $wikiDistinct,
            // 'randomWrongAnswers' => $randomWrongAnswers

        ]);
    }
}