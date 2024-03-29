<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()
                ->user()
                ->timeline(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:500',
        ]);

       // Tweet::create([
      //      'user_id' => auth()->id(),
       //     'body' => $attributes['body'],
      //  ]);

        return redirect()->route('home');
    }
}
