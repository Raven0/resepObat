<center>
<h1>Data Obat</h1>

<a href="/obat/create">Create</a>
<form class="form-inline mt-2 mt-md-0" method="get" action="/obat">
	<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

@foreach($obat as $obats)

<table border="1">
<tr>
	<td>Kode Obat</td>
	<td>Nama Obat</td>
	<td>jenis Obat</td>
	<td>kategori</td>
	<td>Harga Obat</td>
	<td>Jumlah Obat</td>
	<td>Option</td>
</tr>
<tr>
	<td>{{$obats->KodeObat}}</td>
	<td>{{$obats->NamaObat}}</td>
	<td>{{$obats->JenisObat}}</td>
	<td>{{$obats->Kategori}}</td>
	<td>{{$obats->HargaObat}}</td>
	<td>{{$obats->JumlahObat}}</td>
	<td>
		<a href="/obat/{{$obats->KodeObat}}/edit">Edit</a>
		<form action="/obat/{{$obats->KodeObat}}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="delete">
		<input type="submit" name="name	" value="delete">
	</form>
	</td>
</tr>
</table>


@endforeach
	<hr>
{{$obat->render()}}
