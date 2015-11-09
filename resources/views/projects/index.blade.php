@extends('app')
 
@section('content')
    <h2>Projects</h2>
 
    @if ( !$projects->count() )
        You have no projects
    @else
        <ul class="list-unstyled">
            @foreach( $projects as $project )
                <li  style="padding-bottom:10px">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                        <h4 style="display:inline;"><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></h4>
                        
                            {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <h4>
        {!! link_to_route('projects.create', 'Create New Project') !!}
    </h4>
@endsection
