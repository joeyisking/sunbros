<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;
use Redirect;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Returns an array of objects
        $blogs = Post::getPostsByType('blog');
        $auth = new Auth();

        //Adds user's name to obj
        foreach($blogs as $key => $result){
            $blogs[$key]->name = $auth::user()->name;
        }

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //Grab all the data we need to instead into the row
        $auth = new Auth();
        $user_id = $auth::user()->id;
        $input = Input::all();

        $param = array(
            "user_id" => $user_id,
            "title" => $input['title'],
            "body" => $input['body'],
        );

        //Create the row in the database
        Blog::create($param);

        return Redirect::route('blogs.index')->with('message', 'Blog created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
}
