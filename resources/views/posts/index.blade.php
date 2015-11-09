@extends('app')

@section('content')
    <h3>Forums</h3>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
    @foreach($posts as $post)
        <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            <span id="upvote_{{$post->id}}" class="glyphicon glyphicon-arrow-up" aria-hidden="true"/>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <span id="current_votes_{{$post->id}}">{{ $post->votes }}</span>
                        </td>
                    <tr>
                        <td>
                            <span id="downvote_{{$post->id}}" class="glyphicon glyphicon-arrow-down" aria-hidden="true"/>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <h4><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h4>
            </td>
            <td>
                <b>Authored:</b> {{$post->name}}<br />
                <b>Date:</b> {{$post->created_at}}<br />
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('posts.create') }}">Create a Post</a>
@endsection