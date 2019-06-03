<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Quiz;

class TagController extends Controller
{
    public function tags()
    {
        $tags = Tag::all();

        return view('tag', [
            'tags' => $tags
        ]);
    }

    public function quiz($tagId)
    {
        $tags = Tag::all();
        $quizzesTagCollection = Tag::find($tagId)->quizzes()->get();
        
        return view('tag', [
            'quizzesTagCollection' => $quizzesTagCollection,
            'tags' => $tags
        ]);
    }
}