<h1> VIEW </h1>
<a href="poli/create"> CREATE </a>
@foreach($var as $var)
    <p> {{ $var->KodePlk}} </p>
    <p> {{ $var->NamaPlk}} </p>
    <a href="/poli/{{$var->KodePlk}}/edit"> EDIT</a>
    <form action="/poli/{{$var->KodePlk}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>

    <hr>
@endforeach
