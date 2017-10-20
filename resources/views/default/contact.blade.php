<div class="asd">

    <?php var_dump($errors);?>
    @if(count($errors)>0)

        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>

    @endif

    <form method="post" action="{{route('contact')}}">
        {{ csrf_field() }}
        Name:<br>
        <input type="text" name="name" value="{{old('name')}}">
        Email:<br>
        <input type="email" value="{{old('email')}}" name="email">
        Site:<br>
        <input type="text" name="site" value="{{old('site')}}">
        Text<br>
        <textarea name="text" id="text" cols="30" rows="10">{{old('text')}}</textarea><br>
        <button type="submit">Submit</button>
    </form>
</div>
