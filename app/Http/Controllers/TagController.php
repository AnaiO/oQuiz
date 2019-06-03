<?php

namespace App\Http\Controllers;

use App\Tag;

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