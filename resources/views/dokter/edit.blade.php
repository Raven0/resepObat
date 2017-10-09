@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1> Edit </h1>
<form action="/dokter/{{$dokter->KodeDkt}}" method="post">
    <input type="number" name="" value="{{$dokter->KodeDkt}}" disabled><br>
    <input type="text" name="nama" value="{{$dokter->NamaDkt}}" placeholder="Nama Dokter"><br>
    <input type="text" name="spesialis" value="{{$dokter->Spesialis}}" placeholder="Spesialis"><br>
    <input type="text" name="alamat" value="{{$dokter->AlamatDkt}}" placeholder="Alamat Dokter"><br>
    <input type="int" name="telepon" value="{{$dokter->TeleponDkt}}" placeholder="Nomor Telepon"><br>
    <input type="number" name="kodeplk" value="{{$dokter->KodePlk}}" placeholder="Kode Poliklinik"><br>
    <input type="int" name="tarif" value="{{$dokter->Tarif}}" placeholder="Tarif"><br>
    
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
