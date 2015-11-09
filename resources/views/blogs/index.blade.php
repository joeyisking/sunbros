@extends('app')

@section('content')
    <h3>Blogs</h3>

    <div class="panel panel-default">
        <div class="panel-body">
            <?php
            foreach($blogs as $blog){
            ?>
                <a href="{{ route('posts.show', $blog->id) }}">  {{$blog->title}} </a><br />
            <?php
                }
            ?>
        </div>

    </div>

    <div>
        <a class="btn btn-success" href="{{ route('posts.create') }}">New Blog</a>
    </div>
@endsection