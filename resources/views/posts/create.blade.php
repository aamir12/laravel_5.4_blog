@extends('layouts.app')
@section('content')
  
    <h3>Create Post</h3>
    {!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
         {{Form::label('title', 'Title')}}
         {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Title'])}}
        
    </div>

    <div class="form-group">
        {{Form::label('body', 'Description')}}
        {{Form::textarea('body', '',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Post Description'])}}
   </div>

    <div class="form-group">
        {{Form::label('image', 'Image')}}
        {{Form::file('cover_image',['id'=>'image','class'=>'form-control'])}}
   </div>
        
   {{Form::submit('Save',['class'=>'btn btn-success'])}}
    {!! Form::close() !!}

@endsection