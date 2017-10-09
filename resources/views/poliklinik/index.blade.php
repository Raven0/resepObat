@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Poliklinik
@endsection

@section('create')
<a href="poli/create">
    <button class="btn btn-success">
        Create
    </button>
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/poli">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Kode Poliklinik</th>
<th>Nama Poliklinik</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $var)
    <tr>
        <td>{{ $var->KodePlk}}</td>
        <td>{{ $var->NamaPlk}}</td>
        <td>
            <a href="/poli/{{$var->KodePlk}}/edit">
                <button class="btn btn-warning">
                    Edit
                </button>
            </a>
            <form action="/poli/{{$var->KodePlk}}" method="post">
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
