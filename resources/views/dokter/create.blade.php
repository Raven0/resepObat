@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
@extends('layouts.app')

@section('panelhead')
Input Detail
@endsection

@section('create')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form action="/dokter" method="post">
    <input type="text" name="nama" value="" placeholder="Nama Dokter"><br>
    <input type="text" name="spesialis" value="" placeholder="Spesialis"><br>
    <input type="text" name="almt" value="" placeholder="Alamat Dokter"><br>
    <input type="int" name="tlpn" value="" placeholder="Nomor Telepon"><br>
    <input type="number" name="kodeplk" value="" placeholder="Kode Poliklinik"><br>
    <input type="int" name="trf" value="" placeholder="Tarif"><br>
    <input type="hidden" value="{{ csrf_token() }}" name="_token"><br>
    <button class="btn btn-success">
        Create
    </button>
</form>
@endsection
