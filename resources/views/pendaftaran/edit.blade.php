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
<form action="/pendaftaran/{{$var->NomorPendf}}" method="post">
    <input type="text" name="" value="{{$var->NomorPendf}}" disabled><br>
    <input type="date" name="tgl" value="{{$var->TanggalPendf}}" placeholder="Tanggal Pendaftaran"><br>
    <input type="text" name="dok" value="{{$var->KodeDkt}}" placeholder="Kode Dokter"><br>
    <input type="text" name="pas" value="{{$var->KodePsn}}" placeholder="Kode Pasien"><br>
    <input type="text" name="pol" value="{{$var->KodePlk}}" placeholder="Kode Poliklinik"><br>
    <input type="number" name="biaya" value="{{$var->Biaya}}" placeholder="Biaya Pendaftaran"><br>
    <input type="text" name="ket" value="{{$var->Ket}}" placeholder="Keterangan"><br>
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
