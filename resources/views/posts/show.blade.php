@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<img style="width:100%;margin-top:20px;" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image">
<br>
    <h3>{{$post->title}}</h3>
   <div>
       {!! $post->body !!}
   </div>
   <hr>
   <small>{{$post->created_at}} by {{$post->user->name}}</small>
   
   @if (!Auth::guest() && Auth::user()->id == $post->user_id)
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy',$post->id],'class'=>'pull-right','method'=>'POST']) !!}
        {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
        {{Form::hidden('_method','DELETE')}}
    {!! Form::close() !!}
   @endif
   
@endsection