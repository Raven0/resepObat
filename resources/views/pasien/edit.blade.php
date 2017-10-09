<h1> EDIT </h1>
<form action="/pasien/{{$var->KodePsn}}" method="post">
<input type="text" name="KodePsn" value="{{$var->KodePsn}}" placeholder="Kode Pasien" disabled="true"><br>
    <input type="text" name="NamaPsn" value="{{$var->NamaPsn}}" placeholder="Nama Pasien"><br>
    <input type="text" name="AlamatPsn" value="{{$var->AlamatPsn}}" placeholder="Alamat Pasien"><br>
    <input type="text" name="GenderPsn" value="{{$var->GenderPsn}}" placeholder="Gender Pasien"><br>
    <input type="text" name="UmurPsn" value="{{$var->UmurPsn}}" placeholder="Umur Pasien"><br>
    <input type="integer" name="TeleponPsn" value="{{$var->TeleponPsn}}" placeholder="Telepon Pasien"><br>
    <input type="submit" value="edit">

    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>