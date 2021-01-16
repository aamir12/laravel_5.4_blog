@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-lg btn-primary" href="/login" role="button">Login</a>  <a class="btn btn-lg btn-success" href="/register" role="button">Register</a></p>
</div>
@endsection
    