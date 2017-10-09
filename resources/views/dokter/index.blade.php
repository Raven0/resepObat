@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Dokter
@endsection

@section('create')
<a href="dokter/create">
    <button class="btn btn-success">
        Create
    </button>
</a>
<br><br>
@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/dokter">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Kode Dokter</th>
<th>Nama Dokter</th>
<th>Spesialis</th>
<th>Alamat Dokter</th>
<th>Telepon Dokter</th>
<th>Kode Poliklinik</th>
<th>Tarif</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($dokter as $dokter)
    <tr>
        <td>{{ $dokter->KodeDkt}}</td>
        <td>{{ $dokter->NamaDkt}}</td>
        <td>{{ $dokter->Spesialis}}</td>
        <td>{{ $dokter->AlamatDkt}}</td>
        <td>{{ $dokter->TeleponDkt}}</td>
        <td>{{ $dokter->KodePlk}}</td>
        <td>{{ $dokter->Tarif}}</td>
        <td>
            <a href="/dokter/{{$dokter->KodeDkt}}/edit">
                <button class="btn btn-warning">
                    Edit
                </button>
            </a>
            <form action="/dokter/{{$dokter->KodeDkt}}" method="post">
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

<!-- <a href="/dokter/{{$dokter->KodeDkt}}"> -->
