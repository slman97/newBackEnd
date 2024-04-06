@extends('layouts.app')

@section('content')
<div class="container pb-60">
    <div class="row">
        <div class="col-md-12 text-center">
            <a><img src="{{asset('img\no-search-found.png')}}"></a>
            <h1>you don't have profile yet </h1>
        
            <a class="btn btn-submit btn-submitx" href="{{ route('logout') }}" role="button" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"> Logout </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
        </div>
    </div>
</div>
@endsection
