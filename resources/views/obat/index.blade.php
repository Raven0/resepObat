@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Obat
@endsection

@section('create')
<a href="obat/create">
    <button class="btn btn-success">
        Create
    </button>
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/obat">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Kode Obat</th>
<th>Nama Obat</th>
<th>jenis Obat</th>
<th>kategori</th>
<th>Harga Obat</th>
<th>Jumlah Obat</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($obat as $obats)
		<td>{{$obats->KodeObat}}</td>
		<td>{{$obats->NamaObat}}</td>
		<td>{{$obats->JenisObat}}</td>
		<td>{{$obats->Kategori}}</td>
		<td>{{$obats->HargaObat}}</td>
		<td>{{$obats->JumlahObat}}</td>
        <td>
            <a href="/obat/{{$obats->KodeObat}}/edit">
                <button class="btn btn-warning">
                    Edit
                </button>
            </a>
            <form action="/obat/{{$obats->KodeObat}}" method="post">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <input type="hidden" value="delete" name="_method">
                <button class="btn btn-danger">
                    Delete
                </button>
            </form>
        </td>
    </tr>
@endforeach
@endsection
