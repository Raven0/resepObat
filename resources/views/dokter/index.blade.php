{{ Session::get('messege') }}

<h1> VIEW </h1>
<a href="dokter/create"> CREATE </a>


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