@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors -> all() as $error)
                <li>{{$errors}}</li><br>
            @endforeach
        </ul>
    </div>
@endif