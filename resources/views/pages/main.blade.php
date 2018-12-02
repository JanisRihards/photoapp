@extends('layouts/app')
@section('content')
    <div class = 'jumbotron text-center'>
    <img style = 'position:relative;width:70%' src="https://images.ecosia.org/0BDbNMGdBy1tiMc39gQhgNWELdI=/0x390/smart/http%3A%2F%2Fwww.wallpapereast.com%2Fstatic%2Fimages%2FMTMwOTgxMTI5NDk3OTA5NzI2.jpg" alt=""  height="450">
    <div style = 'position:absolute;display:inline-block;right:540px;top:200px;color:white'>
        <h1>@lang('home.main')</h1>
        <h5>@lang('home.main_p')</h5>
        @if (Auth::guest())
             <p>@lang('home.create_acc')</p>
             <p><a class="btn btn-primary btn-lg" href="/login" role="button">@lang('home.login')</a>
             <a class="btn btn-success btn-lg" href="/register" role="button">@lang('auth.register')</a></p>
        @else
            <p>@lang('home.logged_in')  {{ Auth::user()->name }}</p>
    </div>
    </div>
    @endif
@endsection