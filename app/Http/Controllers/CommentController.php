<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment($id,Request $request){

    
        Comment::create([
            'post_id' => $id,
            'user_id' => Auth::user()->id,
            'text' => $request->text,
        ]);

        

        return redirect('/showpost');
    }
}
