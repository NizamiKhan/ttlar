<div class="col-md-9">
    @foreach($news as $new)
        <div class="col-md-4">
            <h2>{{$new->name}}</h2><h3>{{$new->id}}</h3>
            <p>{{$new->announcement}}...</p>
            <p><a class="btn btn-default" href="{{url('news/'.$new->id)}}" role="button">Читать дальше &raquo;</a></p>
        </div>
    @endforeach


</div>

{{--@foreach($news as $new)--}}
{{--<div class="panel panel-default">--}}
{{--<h4>[{{$new->id}}] {{$new->name}}</h4><br>--}}
{{--{{$new->announcement}}--}}
{{--</div>--}}
{{--@endforeach--}}