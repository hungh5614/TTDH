<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Comments\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Request $request){

        $data = $request->all();
        Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $data['post_id'],
            'content' => $data['content']
        ]);

    }
}
