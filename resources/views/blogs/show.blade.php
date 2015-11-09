@extends('app')

@section('content')
    <h2>{{$blog->title}}</h2>

    <p>{{$blog->body}}</p>
@endsection