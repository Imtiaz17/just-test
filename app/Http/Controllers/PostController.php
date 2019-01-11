<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
class PostController extends Controller
{
    public function index()
    {
      $loggedInUserId = Auth::id();
      $posts = Post::all()->where('user_id', $loggedInUserId);
      return view('AdminPanel/adminhome',['posts'=>$posts]);
    }

    public function create()
    {

      return view('AdminPanel/create');
    }
    public function store(Request $request)
    {
      $post= new Post;
      $postUserID=Auth::id();
      $postTitile=$request->title;
      $postBody=$request->body;

      $post->user_id=$postUserID;
      $post->title=$postTitile;
      $post->body=$postBody;
      $post->save();
      return redirect()->route('posts.index');
    }
}
