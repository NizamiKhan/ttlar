{{$title='text'}}
@extends('default.layouts.layout')
@section('content')
    <div class="col-md-9">
        <div class="blog-post">
            <div class="page-header">
                <h1>{{$newsById->name}}</h1>
            </div>
            <p>{{$newsById->text}}</p>
        </div>
    </div>
@endsection
