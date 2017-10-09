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
<form action="/dokter/{{$dokter->KodeDkt}}" method="post">
    <input type="number" name="" value="{{$dokter->KodeDkt}}" disabled><br>
    <input type="text" name="nama" value="{{$dokter->NamaDkt}}" placeholder="Nama Dokter"><br>
    <input type="text" name="spesialis" value="{{$dokter->Spesialis}}" placeholder="Spesialis"><br>
    <input type="text" name="alamat" value="{{$dokter->AlamatDkt}}" placeholder="Alamat Dokter"><br>
    <input type="int" name="telepon" value="{{$dokter->TeleponDkt}}" placeholder="Nomor Telepon"><br>
    <input type="number" name="kodeplk" value="{{$dokter->KodePlk}}" placeholder="Kode Poliklinik"><br>
    <input type="int" name="tarif" value="{{$dokter->Tarif}}" placeholder="Tarif"><br>
    <button class="btn btn-success">
        Edit
    </button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
@endsection
