	<center>
<a href="/detail/create">Create</a>
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