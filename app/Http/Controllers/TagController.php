<?php

namespace App\Http\Controllers;

class TagController extends Controller
{
    public function tags()
    {
        $tags = Tag::all();

        return view('tag', [
            'tags' => $tags
        ]);
    }
}