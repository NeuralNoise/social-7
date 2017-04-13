<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


/**
 *
 */
class PostController extends Controller
{
    public function postCreatePost(Request $request){

        $post = new Post();
        $post->body = $request["body"];
        $request->user()->posts()->save();

        return redirect()->route('dashboard');
    }
}