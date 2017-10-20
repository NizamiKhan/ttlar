{{$title=$category->name}}
@extends('default.layouts.layout')

@section('header')
    {{$url=url('/category/'.$category->id)}}
    @parent
@endsection
@section('content')
    @include('default.content')
@endsection
