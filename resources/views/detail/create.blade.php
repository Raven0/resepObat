<h1>Input data obat</h1>
<form action="/detail" method="POST">
	<input type="text" name="NomorResep" placeholder="nomor resep">
	<input type="text" name="KodeObat" placeholder="kode obat">
	<input type="text" name="Harga" placeholder="harga">
	<input type="text" name="Dosis" placeholder="dosis">
	<input type="text" name="SubTotal" placeholder="sub total">
	<input type="hidden" name="_token" value="{{csrf_token() }}">
	<input type="submit" name="name" value="POST">
</form>