@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Detail
@endsection

@section('create')
<a href="detail/create">
    <button class="btn btn-success">
        Create
    </button>
</a>
<br><br>
@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/detail">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id</th>
<th>Nomor Resep</th>
<th>Kode Obat</th>
<th>Harga</th>
<th>Dosis</th>
<th>Sub Total</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($detail as $details)
    <tr>
		<td>{{$details->id}}</td>
		<td>{{$details->NomorResep}}</td>
		<td>{{$details->KodeObat}}</td>
		<td>{{$details->Harga}}</td>
		<td>{{$details->Dosis}}</td>
		<td>{{$details->SubTotal}}</td>
        <td>
            <a href="/detail/{{$details->id}}/edit">
                <button class="btn btn-warning">
                    Edit
                </button>
            </a>
            <form action="/detail/{{$details->id}}" method="post">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <input type="hidden" value="delete" name="_method">
                <button class="btn btn-danger">
                    Delete
                </button>
            </form>
        </td>
    </tr>
@endforeach
{!!$detail->links()!!}
@endsection
