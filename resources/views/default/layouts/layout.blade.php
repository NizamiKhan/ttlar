<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>

<body>
@section('navbar')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Главная</a>
                <a class="navbar-brand" href="{{url('/add')}}">Добавить новость</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right">
                    {{--<div class="form-group">--}}
                    {{--<input type="text" placeholder="Email" class="form-control">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                    {{--<input type="password" placeholder="Password" class="form-control">--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-success">Sign in</button>--}}
                    @if (Auth::guest())
                        <p class="navbar-brand"> Привет, Гость <a href="{{url('login')}}"
                                                                  class="btn btn-success">Войти</a>
                    @else
                        <p class="navbar-brand"> Привет, {{ Auth::user()->name }}</p>
                        <a href="{{url('logout')}}" class="btn btn-danger">Выйти</a>
                    @endif
                </form>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>
@endsection()
@yield('navbar')

@section('header')

    @if(!isset($url))
        {{$url=url('/')}}
    @endif


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1><a href="{{$url}}">{{$title}}</a></h1>
        </div>
    </div>
@endsection()
@yield('header')

<div class="container">
    <!-- Example row of columns -->
    {{--@foreach($categories as $category)--}}
    {{--<thead>--}}
    {{--<th><a href="{{url($category->id)}}">{{$category->name}}</a></th>--}}

    {{--</thead>--}}
    {{--@endforeach--}}

    <div class="row">
        <div class="col-md-3">
            @section('sidebar')
                <div class="sidebar-module">
                    <h2>Каталог новостей</h2>
                    <ol class="list-unstyled">
                        @foreach($categories as $category)
                            <li><a href="{{url('/category/'.$category->id)}}"><h4>{{$category->name}}</h4></a></li>
                        @endforeach
                    </ol>
                </div>

            @show
        </div>
        @yield('content')
    </div>


</div>

<hr>

<footer>
    <p>&copy; 2016 Company, Inc.</p>
</footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
