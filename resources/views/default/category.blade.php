{{$title=$category->name}}
@extends('default.layouts.layout')

@section('header')
    {{$url=url('/category/'.$category->id)}}
    @parent
@endsection
@section('content')
    @include('default.content')
@endsection



{{--<div class="col-md-9">--}}
{{--@foreach($news as $new)--}}
{{--<div class="blog-post">--}}
{{--<div class="page-header">--}}
{{--<h1>{{$new->name}}</h1>--}}
{{--</div>--}}
{{--<p>{{$new->text}}</p>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--</div>--}}