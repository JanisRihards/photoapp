@extends('layouts/app')

@section('content')
<br>
<a href="\posts" class = 'btn btn-primary'>@lang('home.back')</a>
    <h1>{{$post->title}}</h1>
    <img style = 'width:100%' src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
        <small>@lang('blog.a'): {{$post->user->name}} {{$post->created_at}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a class = 'btn btn-primary' href="/posts/{{$post->id}}/edit">@lang('home.edit')</a>


               <a class = 'btn right'>{!! Form::open(['action' => ['PostsController@destroy', $post->id],
                'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!} </a>
            @endif
        @endif
@endsection
