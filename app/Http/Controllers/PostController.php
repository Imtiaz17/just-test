<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
class PostController extends Controller
{
  public function homePage()
  {
    $posts=Post::orderby('id','desc')->paginate(10);
    return view('blog/home')->with('posts',$posts);
  }
    public function index()
    {
      $loggedInUserId = Auth::id();
      $posts = Post::all()->where('user_id', $loggedInUserId);
      return view('AdminPanel/adminhome')->with('posts',$posts);
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
    public function show($id)
    {
      $post=Post::find($id);
      $data= array('id' =>$id ,'post'=>$post );
      return view('blog.viewpost',$data);
    }
}
