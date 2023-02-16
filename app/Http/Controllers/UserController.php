<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class UserController extends Controller
{
    public function store_comment(){

        $user = User::find(1);

        $comment = new Comment;
        $comment->user_id = $user->id;
        $comment->comment = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust';
        $comment->save();

        $comment = new Comment;
        $comment->user_id = $user->id;
        $comment->comment = 'king it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydne';
        $comment->save();

        $comment = new Comment;
        $comment->user_id = $user->id;
        $comment->comment = 'ed to be sure there isnt anything embarrassing hidden in the middle of text. All the Latin words,';
        $comment->save();

        dd($comment);
    }
}
