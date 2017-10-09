<h1>CREATE</h1>

<form action="/pasien" method="post">
    <input type="text" name="KodePsn" value="" placeholder="Kode Pasien" disabled="true"><br>
    <input type="text" name="NamaPsn" value="" placeholder="Nama Pasien"><br>
    <input type="text" name="AlamatPsn" value="" placeholder="Alamat Pasien"><br>
    <input type="text" name="GenderPsn" value="" placeholder="Gender Pasien"><br>
    <input type="text" name="UmurPsn" value="" placeholder="Umur Pasien"><br>
    <input type="integer" name="TeleponPsn" value="" placeholder="Telepon Pasien"><br>
    <input type="submit" value="Submit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>