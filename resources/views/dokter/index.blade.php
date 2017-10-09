{{ Session::get('messege') }}

<h1> VIEW </h1>
<a href="dokter/create"> CREATE </a>

<form class="form-inline mt-2 mt-md-0" method="get" action="/dokter">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

@foreach($dokter as $dokter)
    <p> {{ $dokter->KodeDkt}} </p>
    <a href="/dokter/{{$dokter->KodeDkt}}"><p> {{ $dokter->NamaDkt}} </p></a>
    <p> {{ $dokter->Spesialis}} </p>
    <p> {{ $dokter->AlamatDkt}} </p>
    <p> {{ $dokter->TeleponDkt}} </p>
    <p> {{ $dokter->KodePlk}} </p>
    <p> {{ $dokter->Tarif}} </p>
    {{ date('F d, Y', strtotime($dokter->created_at))}}<br><br>
    <form action="/dokter/{{$dokter->KodeDkt}}" method="post">
   	    <input type="hidden" value="delete" name="_method">
   	    <input type="submit" name="name" value="delete">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">

    </form>
    <a href="/dokter/{{$dokter->KodeDkt}}/edit"> EDIT</a>


    <hr>
@endforeach
