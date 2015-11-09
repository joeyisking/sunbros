<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::getPostsByType('post');
        $auth = new Auth();

        //Adds user's name to obj
        foreach($posts as $key => $result){
            $posts[$key]->name = $auth::user()->name;
        }
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        Post::create( $input );
        return Redirect::route('posts.index')->with('message', 'Post created');

    }

    /**
     * Display the specified resource.
     *
     * @param  ID of App\Post $id
     * @return Response
     */
    public function show($id)
    {
        //This will need to be reviewed in future,
        //I believe there should be a better way to do it using the show(Post $id)
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function update_votes()
    {
        $input = Input::all();

        $post = Post::find($input['id']);
        $votes = $post->votes + $input['vote'];

        $post->votes = $votes;
        $post->save();

        return json_encode($post);
    }
}
