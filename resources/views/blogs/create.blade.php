@extends('app')

@section('content')
    <h2>Create a new Blog Post</h2>

    {!! Form::model(new App\Post, ['route' => ['blogs.store']]) !!}
    @include('blogs/partials/_createBlog', ['submit_text' => 'Create Blog'])
    {!! Form::close() !!}
@endsection