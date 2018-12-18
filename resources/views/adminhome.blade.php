@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br>
            <!-- <div class="card">
                <h4 class="card-header">@lang('home.posts')</h4>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a class = 'btn btn-primary' href="/posts/create">@lang('home.create_post')</a>
                        
                    <h3><br>@lang('home.your_post')</h3>
                    @if(count($posts) > 0)
                     <table class = 'table table-striped'>
                            <tr>
                                <td><h5>@lang('home.headline')</h5></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a class = 'btn btn-primary' href="/posts/{{$post->id}}/edit">@lang('home.edit')</a></td>
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id],
                                    'method' => 'POST', 'class' => 'pull-right']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>@lang('home.post_info')</p>
                    @endif
                </div>
            </div> -->
            <br>
            <div class="card">
                <h1 class="card-header">@lang('home.admin')</h1>
                <h4 class="card-header">@lang('home.posts')</h4>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    @if(count($posts) > 0)
                     <table class = 'table table-striped'>
                            <tr>
                                <td><h5>@lang('home.headline')</h5></td>
                                <td>@lang('home.user') ID</td>
                                <td>@lang('auth.name')</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->user_id}}</td>
                                <td>{{$post->username }}</td>
                                <td><a class = 'btn btn-primary' href="/posts/{{$post->id}}/edit">@lang('home.edit')</a></td>
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id],
                                    'method' => 'POST', 'class' => 'pull-right']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <a class = ' btn btn-primary' href="/posts/create">@lang('home.create_post')</a>
                        @else
                        <p>@lang('home.user_info')</p>
                    @endif
                </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection
