<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;
use Redirect;
use App\Chat;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //returns an array of objects
        $chatmessages = Chat::all();

        $auth = new Auth();
//        echo "<pre>"; var_dump($auth::user()->name);die('x');
        //Adds user's name to obj
        foreach($chatmessages as $key => $result){
            $chatmessages[$key]->name = $auth::user()->name;
        }

        return view('chat.index',  compact('chatmessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
            "message" => $input['message'],
        );

        //Create the row in the database
        $result = Chat::create($param);
        $result['name'] = $auth::user()->name;
        if (is_object($result)){
            return json_encode($result);
        }

        return false;
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
