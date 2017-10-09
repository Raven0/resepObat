<h1> VIEW </h1>
<a href="poli/create"> CREATE </a>

<form class="form-inline mt-2 mt-md-0" method="get" action="/poli">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

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
