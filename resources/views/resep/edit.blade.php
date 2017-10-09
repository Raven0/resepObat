<h1> EDIT </h1>
<form action="/resep/{{$var->NomorResep}}" method="post">
					    Nomor Resep : <br>
					    <input type="integer" name="NomorResep" value="{{$var->NomorResep}}" placeholder="Nomor Resep"><br>
					    Tanggal Resep :<br>
					    <input type="datetime" name="TanggalResep" value="{{$var->TanggalResep}}" placeholder="Tanggal Resep"><br>
					    Kode Dokter : <br>
					    <input type="integer" name="KodeDkt" value="{{$var->KodeDkt}}" placeholder="Kode Dokter"><br>
					    Kode Pasien : <br>
					    <input type="integer" name="KodePsn" value="{{$var->KodePsn}}" placeholder="Kode Pasien"><br>
					    Kode Poliklinik :<br>
					    <input type="integer" name="KodePlk" value="{{$var->KodePlk}}" placeholder="Kode Poliklinik"><br>
					    Total Harga : <br>
					    <input type="float" name="TotalHarga" value="{{$var->TotalHarga}}" placeholder="Total Harga"><br>
					    Bayar : <br>
					    <input type="float" name="Bayar" value="{{$var->Bayar}}" placeholder="Bayar"><br>
					    Kembali	:<br>		
					    <input type="text" name="Kembali" value="{{$var->Kembali}}" placeholder="Kembali"><br><br>
					    <input type="submit" value="Submit">
					    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    					<input type="hidden" value="put" name="_method">
</form>