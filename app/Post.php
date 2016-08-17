<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'body', 'date', 'description'
    ];
    //
    function comments(){
        return $this->hasMany(Comment::class);
    }

    function addComment(Comment $comment,User $user){

        $comment->user()->associate($user);
        return $this->comments()->save($comment);
    }
}
