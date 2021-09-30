<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skilll;
use App\Models\Post;
use App\Models\Comment;
use App\Models\LikeDislike;
use Illuminate\Support\Facades\Auth;

class UiController extends Controller
{
    public function index(){
        $skills = Skilll::all();

        return view('ui-panel.index',compact('skills'));
    }

    public function ShowPost(){

        $posts = Post::all();

        $comments = Comment::where('post_id',1)->where('user_id',Auth::user()->id)->get(); 
        
        return view('ui-panel.post-details',compact('posts','comments'));
    }
}
