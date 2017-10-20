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

        <?php echo $newsById->render(); ?>
        <div class="panel panel-default">
            <!-- Default panel contents -->

            <div class="panel-heading"><h1>Ваши новости:</h1></div>
            <table class="table">
                <thead>
                <tr>
                    <th>#id</th>
                    <th>Заголовок</th>
                    <th>Анонс текста</th>
                    <th>Создание</th>
                    <th>Изменение</th>
                    <th>Редактировать</th>
                </tr>
                </thead>
                <tbody>
                @foreach($newsById as $news)
                    <tr>
                        <th scope="row">{{$news->id}}</th>
                        <td>{{$news->name}}</td>
                        <td>{{$news->announcement}}</td>
                        <td>{{$news->created_at}}</td>
                        <td>{{$news->updated_at}}</td>
                        <td><a href="{{url('admin/update-post/'.$news->id)}}">Редактировать</a></td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>
        <?php echo $newsById->render(); ?>

    </div>
@endsection

