<?php
namespace App\Http\Controllers;

use App\Quiz;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function homeAction()
    {
        $quizzes = Quiz::all();
                            

        return view('home', [
            'quizzes' => $quizzes
        ]);
    }
}