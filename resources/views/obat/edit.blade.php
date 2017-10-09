@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1> EDIT </h1>
<form action="/obat/{{$var->KodeObat}}" method="post">
	<input type="string" name="KodeObat" value="{{$var->KodeObat}}" placeholder="kode obat">
	<input type="string" name="NamaObat" value="{{$var->NamaObat}}" placeholder="nama obat">
	<input type="string" name="JenisObat" value="{{$var->JenisObat}}" placeholder="jenis obat">
	<input type="string" name="Kategori" value="{{$var->Kategori}}" placeholder="kategori">
	<input type="string" name="HargaObat" value="{{$var->HargaObat}}" placeholder="harga obat">
    <input type="string" name="JumlahObat" value="{{$var->JumlahObat}}" placeholder="jumlah obat">
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>