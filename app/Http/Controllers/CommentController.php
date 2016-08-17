<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //

    function create(Request $request, Post $post){


        $user = $request->user();
        $comment = new Comment;
        $comment->text = $request->text;
        $comment->date = Carbon::now();

        $post->addComment($comment, $user);

        return back();
    }
}
