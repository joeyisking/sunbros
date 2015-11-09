@extends('app')

@section('content')
    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>

    {!! Form::model(new App\Comment, ['route' => ['comments.store']]) !!}
    @include('posts/partials/_createComment', ['submit_text' => 'Submit'])
    {!! Form::close() !!}

    <div>
        Comments actually are going to be displayed here
    </div>
@endsection