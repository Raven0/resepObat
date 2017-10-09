
<h1>Input data obat</h1>
<form action="/obat" method="POST">
	<input type="text" name="NamaObat" placeholder="nama obat">
	<input type="text" name="JenisObat" placeholder="jenis obat">
	<input type="text" name="Kategori" placeholder="kategori">
	<input type="text" name="HargaObat" placeholder="harga obat">
	<input type="text" name="JumlahObat" placeholder="jumlah obat">
	<input type="hidden" name="_token" value="{{csrf_token() }}">
	<input type="submit" name="name" value="POST">
</form>
