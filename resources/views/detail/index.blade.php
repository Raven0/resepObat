	<center>
<a href="/detail/create">Create</a>
<form class="form-inline mt-2 mt-md-0" method="get" action="/detail">
	<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<h1>Halaman Detail</h1>
@foreach($detail as $details)


	<table border="1">
		<tr>
			<td>Id</td>
			<td>Nomor Resep</td>
			<td>Kode Obat</td>
			<td>Harga</td>
			<td>Dosis</td>
			<td>Sub Total</td>
			<td>Option</td>
		</tr>
	<tr>
		<td>{{$details->id}}</td>
		<td>{{$details->NomorResep}}</td>
		<td>{{$details->KodeObat}}</td>
		<td>{{$details->Harga}}</td>
		<td>{{$details->Dosis}}</td>
		<td>{{$details->SubTotal}}</td>
		<td>
			<a href="/detail/{{$details->id}}/edit">Edit</a>
			<form action="/detail/{{$details->id}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="delete">
				<input type="submit" name="name	" value="delete">
			</form>
		</td>
	</tr>
	</table>




	<hr>

@endforeach
{!!$detail->links()!!}

	</center>
