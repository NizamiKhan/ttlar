@extends('default.layouts.layout')
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h1>{{$title}}</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-9">
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

        <form method="post" action="{{route('admin_add_post_p')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="name">Заголовок</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label>Категория</label>

                <select id="select" name="select">
                    @foreach($categories as $category)
                        <option>{{$category->name}}</option>
                    @endforeach
                </select>
                <div><input type="file" name="image_file" accept="image/*"/></div>
            </div>
            <div class="form-group">
                <label for="text">TEXT</label>
                <textarea class="form-control" id="text" name="text">{{old('img')}}</textarea>
            </div>
            <div class="form-group">
                <label for="announcement">Анонс</label>
                <input type="text" class="form-control" id="announcement" name="announcement"
                       value="{{old('announcement')}}">
            </div>
            <script>
                var editor = CKEDITOR.replace('text');
            </script>
            <button type="submit" class="btn-primary">SUBMIT</button>
        </form>
    </div>
@endsection
