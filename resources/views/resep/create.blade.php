<h1>CREATE</h1>
<form action="/resep" method="post">
					    Nomor Resep : <br>
					    <input type="integer" name="NomorResep" value="" placeholder="Nomor Resep" disabled="true"><br>
					    Tanggal Resep :<br>
					    <input type="date" name="TanggalResep" value="" placeholder="Tanggal Resep"><br>
					    Kode Dokter : <br>
					    <input type="integer" name="KodeDkt" value="" placeholder="Kode Dokter"><br>
					    Kode Pasien : <br>
					    <input type="integer" name="KodePsn" value="" placeholder="Kode Pasien"><br>
					    Kode Poliklinik :<br>
					    <input type="integer" name="KodePlk" value="" placeholder="Kode Poliklinik"><br>
					    Total Harga : <br>
					    <input type="float" name="TotalHarga" value="" placeholder="Total Harga"><br>
					    Bayar : <br>
					    <input type="float" name="Bayar" value="" placeholder="Bayar"><br>
					    Kembali	:<br>		
					    <input type="text" name="Kembali" value="" placeholder="Kembali"><br><br>
					    <input type="submit" value="Submit">
					    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>