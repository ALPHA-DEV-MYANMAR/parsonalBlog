<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LikeDislike;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LikeDislikeController extends Controller
{
    public function like($post_id){

        $user_id = Auth::user()->id;

        $isExit = LikeDislike::where('like','=',$post_id)->where('dislike','=',$user_id)->first();

        if($isExit){
            if($isExit->type == 'dislike'){
                return back();
            }else{
                LikeDislike::where('id',$isExit->id)->update([
                    'type' => 'dislike',
                ]);
            }
            return back();
        }else{

            LikeDislike::create([
                'like' => $post_id,
                'dislike' => $user_id,
                'type' => 'like',
            ]);
            return back();
        }
    }

    public function dislike($post_id){
        $user_id = Auth::user()->id;

        $isExit = LikeDislike::where('like','=',$post_id)->where('dislike','=',$user_id)->first();

        if($isExit){
            if($isExit->type == 'dislike'){
                return back();
            }else{
                LikeDislike::where('id',$isExit->id)->update([
                    'type' => 'dislike',
                ]);
            }
            return back();
        }else{

            LikeDislike::create([
                'like' => $post_id,
                'dislike' => $user_id,
                'type' => 'dislike',
            ]);
            return back();
        }

        //return json_decode($isExit);
    }
}
