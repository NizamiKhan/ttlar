
<div class="col-md-9">
    <div class="row">
        <?php echo $news->render(); ?>
    </div>
    @foreach($news as $new)
        <div class="col-md-4">
            <a href="{{url('news/'.$new->id)}}"><h2>{{$new->name}}</h2></a>
            <h3>{{$new->id}}</h3>
            <p>{{$new->announcement}}...</p>
            <p><a class="btn btn-default" href="{{url('news/'.$new->id)}}" role="button">Читать дальше &raquo;</a></p>
        </div>
    @endforeach
    <?php echo $news->render(); ?>

</div>
