<h1> VIEW </h1>
<a href="resep/create"> CREATE </a>

@foreach($var as $var)
<p> {{ $var->NomorResep}} </p>
    <p> {{ $var->TanggalResep}} </p>
    <p> {{ $var->KodeDkt}} </p>
    <p> {{ $var->KodePsn}} </p>
    <p> {{ $var->KodePlk}} </p>
    <p> {{ $var->TotalHarga}} </p>
    <p> {{ $var->Bayar}} </p>
    <p> {{ $var->Kembali}} </p>
    <a href="/resep/{{$var->NomorResep}}/edit"> EDIT</a> || <a href="/resep/{{$var->NomorResep}}">Show</a>
    <form action="/resep/{{$var->NomorResep}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
	</form>
    <hr>
@endforeach