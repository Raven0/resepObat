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
<form action="/obat/{{$var->KodeObat}}" method="post">
	<input type="string" name="KodeObat" value="{{$var->KodeObat}}" placeholder="kode obat"><br>
	<input type="string" name="NamaObat" value="{{$var->NamaObat}}" placeholder="nama obat"><br>
	<input type="string" name="JenisObat" value="{{$var->JenisObat}}" placeholder="jenis obat"><br>
	<input type="string" name="Kategori" value="{{$var->Kategori}}" placeholder="kategori"><br>
	<input type="string" name="HargaObat" value="{{$var->HargaObat}}" placeholder="harga obat"><br>
    <input type="string" name="JumlahObat" value="{{$var->JumlahObat}}" placeholder="jumlah obat"><br>
    <button class="btn btn-success">
        Edit
    </button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
@endsection
