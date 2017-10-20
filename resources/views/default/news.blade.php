{{$title='text'}}
@extends('default.layouts.layout')
@section('header')
    <div class="jumbotron">
        <div class="container"></div>
    </div>
@endsection
@section('content')
    <div class="col-md-9">
        <div class="blog-post">
            <div class="page-header">
                <h1>{{$newsById->name}}</h1>
            </div>
            <p>{{$newsById->text}}</p>
        </div>
        <img src="{{asset('images/news/'.$imgUrl)}}" alt="Изображение для новости">
    </div>
@endsection
