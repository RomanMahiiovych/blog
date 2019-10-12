<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public  function store(Post $post, CommentRequest $request){

        Comment::create([
            'body' => $request->get('body'),
            'postId' => $post->id,
            'user_id' => Auth::user()->id
        ]);

        return back();
    }
}
