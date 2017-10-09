@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Pasien
@endsection

@section('create')
<a href="pasien/create">
    <button class="btn btn-success">
        Create
    </button>
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/pasien">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Nama Pasien</th>
<th>Alamat</th>
<th>Gender</th>
<th>Umur</th>
<th>Telepon</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $var)
    <tr>
        <td>{{ $var->KodePsn}}</td>
        <td>{{ $var->NamaPsn}}</td>
        <td>{{ $var->AlamatPsn}}</td>
        <td>{{ $var->GenderPsn}}</td>
        <td>{{ $var->UmurPsn}}</td>
        <td>{{ $var->TeleponPsn}}</td>
        <td>
            <a href="/pasien/{{$var->KodePsn}}/edit">
                <button class="btn btn-warning">
                    Edit
                </button>
            </a>
            <form action="/pasien/{{$var->KodePsn}}" method="post">
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
