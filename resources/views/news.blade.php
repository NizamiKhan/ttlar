@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="col-sm-offset-2 col-sm-8">
                        @foreach($news as $new)
                            <div class="panel panel-default">
                                <h4>[{{$new->id}}] {{$new->name}}</h4><br>
                                {{$new->announcement}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-9">
                    <table class="table table-striped task-table">
                        <h4>Категории новостей</h4>
                        @foreach($categories as $category)
                            <thead>
                            <th><a href="{{url($category->id)}}">{{$category->name}}</a></th>

                            </thead>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>


    </div>
@endsection