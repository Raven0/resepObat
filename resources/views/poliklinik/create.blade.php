@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1>CREATE</h1>

<form action="/poli" method="post">
    <input type="text" name="NamaPlk" value="" placeholder="Nama"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
