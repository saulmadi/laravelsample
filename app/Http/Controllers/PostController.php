<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;


use App\Http\Requests;

class PostController extends Controller
{
    //
    function index(){
        $posts = Post::all();
        $posts->load('comments');
        $parser = new \Parsedown();

        return view('posts.index', ['posts'=>$posts  ]);
    }


    function detail(Post $post){


        return view('posts.detail', ['post'=>$post , 'html'=>\Parsedown::instance()->text($post->body) ])->render();
    }

    function create(){

        return view('posts.create');
    }

    function add(Request $request){

        $fields = array_add($request->all(),'date',Carbon::now());
        Post::Create($fields);

        return redirect('/posts');
    }
}
