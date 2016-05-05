<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
 
use App\Post;

class PostController extends Controller
{
    public function postCreatePost(Request $request)
	{
		//validation
		$new_post_text = $request['new_post_text'];
		
		$post = new Post();
		$post->new_post_text = $new_post_text;
		$request->user()->posts()->save($post);
		return redirect()->route('dashboard');
		
	}
}
