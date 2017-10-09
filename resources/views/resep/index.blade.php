@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Resep
@endsection

@section('create')
<a href="resep/create">
    <button class="btn btn-success">
        Create
    </button>
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/resep">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Nomor Resep</th>
<th>Tanggal</th>
<th>Dokter</th>
<th>Pasien</th>
<th>Poli</th>
<th>Total</th>
<th>Bayar</th>
<th>Kembali</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $var)
    <tr>
        <td>{{ $var->NomorResep}}</td>
        <td>{{ $var->TanggalResep}}</td>
        <td>{{ $var->KodeDkt}}</td>
        <td>{{ $var->KodePsn}}</td>
        <td>{{ $var->KodePlk}}</td>
        <td>{{ $var->TotalHarga}}</td>
        <td>{{ $var->Bayar}}</td>
        <td>{{ $var->Kembali}}</td>
        <td>
            <a href="/resep/{{$var->NomorResep}}/edit">
                <button class="btn btn-warning">
                    Edit
                </button>
            </a>
            <form action="/resep/{{$var->NomorResep}}" method="post">
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
