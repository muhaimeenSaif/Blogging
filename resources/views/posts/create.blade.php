@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-default">Go Back</a>
        <h1>Create Post</h1>
        {!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body'])}} 
                {{-- 'id'=>'article-ckeditor', --}}
            </div>
            <div class="form-group">
                {{-- {{Form::file('cover_image')}} --}}
                <input type="file" id="cover_image" name="cover_image" accept=".png, .jpg, .jpeg">
                <label for="cover_image"></label>
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    <div>    
@endsection