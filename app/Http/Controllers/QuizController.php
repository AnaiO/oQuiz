<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class QuizController extends Controller 
{
    public function showQuiz()
    {
        return view('quiz');
    }
}