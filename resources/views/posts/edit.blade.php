@extends('layouts/app')

@section('content')

 
<br>
    <h1>@lang('home.edit')</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class = 'form-group'>
            {{Form::label('title','Virsraksts')}}
            {{Form::text('title',$post->title, ['class' => 'form-control','placeholder' => 'Virsraksts'])}}
        </div>
        <div class = 'form-group'>
            {{Form::label('body','Saturs')}}
            {{Form::textarea('body',$post->body, [ 'id' => 'article-ckeditor','class' => 'form-control','placeholder' => 'Sis ir ieraksta saturs!'])}}
        </div>
        <div class = 'form-group'>
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Iesniegt', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection