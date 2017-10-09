<h1> pembayaran </h1>
<a href="pembayaran/create"> CREATE </a>

<!-- STYLE MULAI DISINI -->
<style>

table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}

</style>

<!-- TABLE MULAI DISINI -->
<table>
    <tr>
        <th>Nomor Pembayaran</th>
        <th>Kode Pasien</th>
        <th>Tanggal Pembayaran</th>
        <th>Jumlah Pembayaran</th>
        <th>Action</th>
    </tr>
    @foreach($var as $var)
        <tr>
            <td>{{ $var->NomorByr}}</td>
            <td>{{ $var->KodePsn}}</td>
            <td>{{ $var->TanggalByr}}</td>
            <td>{{ $var->JumlahByr}}</td>
            <td>
                <a href="/pembayaran/{{$var->NomorByr}}/edit"> Edit</a>
                <form action="/pembayaran/{{$var->NomorByr}}" method="post">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="delete" name="_method">
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
