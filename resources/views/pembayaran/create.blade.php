@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1>create</h1>

<form action="/pembayaran" method="post">
    <input type="text" name="pas" value="" placeholder="Kode Pasien"><br>
    <input type="date" name="tgl" value="" placeholder="Tanggal Bayar"><br>
    <input type="number" name="bay" value="" placeholder="Jumlah Bayar"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
