@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Pendaftaran
@endsection

@section('create')
<a href="pendaftaran/create">
    <button class="btn btn-success">
        Create
    </button>
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/pendaftaran">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Nomor Pendaftaran</th>
<th>Tanggal Pendaftaran</th>
<th>Kode Dokter</th>
<th>Kode Pasien</th>
<th>Kode Poliklinik</th>
<th>Biaya Pendaftaran</th>
<th>Keterangan</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $var)
    <tr>
        <td>{{ $var->NomorPendf}}</td>
        <td>{{ $var->TanggalPendf}}</td>
        <td>{{ $var->KodeDkt}}</td>
        <td>{{ $var->KodePsn}}</td>
        <td>{{ $var->KodePlk}}</td>
        <td>{{ $var->Biaya}}</td>
        <td>{{ $var->Ket}}</td>
        <td>
            <a href="/pendaftaran/{{$var->NomorPendf}}/edit">
                <button class="btn btn-warning">
                    Edit
                </button>
            </a>
            <form action="/pendaftaran/{{$var->NomorPendf}}" method="post">
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
