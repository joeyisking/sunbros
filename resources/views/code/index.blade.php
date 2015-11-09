@extends('app')

@section('content')

    <h1>Code Snippets</h1>

    <div class="panel panel-default">
        <div class="panel-body">
            This Section of the site is to show off any code snippets or functions I've written in Lavavel but don't
            have a home elsewhere
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ url('/images')}}">A wysiwyg Editor</a>
        </div>
        <div class="panel-body">
            <a href="{{ url('/projects')}}">A basic task tracking system</a>
        </div>
    </div>

@endsection