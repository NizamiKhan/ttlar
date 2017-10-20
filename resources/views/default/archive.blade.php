@extends('default.layouts.layout')
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h1>Archive</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-9">
        <div class="blog-post">
            <div class="page-header">
                <h1>Заголовок: {{$archive->name}}</h1>
            </div>
            <p>Текст: {{$archive->text}}</p>
            <p>Анонс: {{$archive->announcement}}</p>

        </div>
{{--        <img src="{{asset('images/news/'.$imgUrl)}}" alt="Изображение для новости">--}}
    </div>
@endsection
