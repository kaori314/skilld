<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Post;
use Illuminate\Http\Request;
use Auth;
use App\User;

class PostController extends Controller
{
    //
	public function createPost(){
		if (Auth::check()){
			return view('posts.create');
		}
		else{
			return redirect()->route('login');
		}
	}

	public function addPost(Request $request){
		if (Auth::check()){
			$title = $request->input('title');
			$content = $request->input('content');
			$post = new Post;
			$post->title = $title;
			$post->content = $content;
			$post->author_id = Auth::user()->id;
			$post->save();
			$post_id = $post->id;
			if ($request->file('thumb') != null){
				$thumb_name =  'thumb_' . $post_id . '.'.$request->thumb->getClientOriginalExtension();
				$request->thumb->move(public_path('img'), $thumb_name);
				$post->thumb_url = $thumb_name;
				$post->save();
			}
			return redirect()->route('adminIndex');

		}
		else{
			return redirect()->route('login');
		}
	}


	public function showPost(Request $request, $id){
		$post = Post::where('id', $id)->get();
		if (count($post) == 0){
			return redirect()->route('home');
		}
		// dd($post);
		$post = $post[0];
		$post_title = $post->title;
		$content = $post->content;
		$author_id = $post->author_id;
		$created_at = $post->created_at;
		$author_name = User::where('id', $author_id)->get()[0]->name;
		// dd($post->thumb_url);
		// $thumb_url = $post->
		return view('posts.show', ['title'=>$post_title, 'content'=>$content, 'author_id'=>$author_id, 'created_at'=>$created_at, 'author_name'=>$author_name, 'post_id'=>$id, 'thumb_url'=>$post->thumb_url]);
	}


}
