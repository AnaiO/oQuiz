<?php
namespace App\Http\Controllers;

use App\Quizzes;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function homeAction()
    {
        $quizzes = Quizzes::all();
                            

        return view('home', [
            'quizzes' => $quizzes
        ]);
    }
}