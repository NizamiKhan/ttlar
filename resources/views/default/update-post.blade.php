@extends('default.layouts.layout')
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h1>{{$title}}</h1>
        </div>
    </div>
@endsection
@section('content')
    <h1>Новость № {{$newsById->id}}</h1>
    <div class="col-md-9">
        {{--<div class="">--}}
        {{--<h2></h2>--}}
        {{--</div>--}}
        @if(count($errors)>0)
            <div class="alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('message'))
            <div class="alert-success">{{session('message')}}</div>
        @endif

        <form method="post" action="{{route('admin_update_post_news')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id" value="{{$newsById->id}}">
            <div class="form-group">
                <label for="name">Заголовок</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$newsById->name}}">
            </div>
            <div class="form-group">
                <label>Категория</label>

                <select id="select" name="select">
                    @foreach($categories as $category)
                        <option>{{$category->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="text">TEXT</label>
                <textarea class="form-control" id="text" name="text">{{$newsById->text}}</textarea>
            </div>
            <div class="form-group">
                <label for="announcement">Анонс</label>
                <input type="text" class="form-control" id="announcement" name="announcement"
                       value="{{$newsById->announcement}}">
            </div>
            <script>
                var editor = CKEDITOR.replace('text');
            </script>
            <button type="submit" class="btn-primary">SUBMIT</button>
        </form>
    </div>
@endsection
