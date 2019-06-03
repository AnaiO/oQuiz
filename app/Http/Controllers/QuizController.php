<?php
namespace App\Http\Controllers;

use App\Quiz;
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
}