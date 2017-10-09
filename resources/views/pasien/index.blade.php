<h1> VIEW </h1>
<a href="pasien/create"> CREATE </a>

@foreach($var as $var)
<p> {{ $var->KodePsn}} </p>
    <p> {{ $var->NamaPsn}} </p>
    <p> {{ $var->AlamatPsn}} </p>
    <p> {{ $var->GenderPsn}} </p>
    <p> {{ $var->UmurPsn}} </p>
    <p> {{ $var->TeleponPsn}} </p>
    <a href="/pasien/{{$var->KodePsn}}/edit"> EDIT</a> || <a href="/pasien/{{$var->KodePsn}}">Show</a>
    <form action="/pasien/{{$var->KodePsn}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
</form>

    <hr>
@endforeach