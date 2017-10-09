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
<form action="/obat" method="POST">
	<input type="text" name="NamaObat" placeholder="nama obat"><br>
	<input type="text" name="JenisObat" placeholder="jenis obat"><br>
	<input type="text" name="Kategori" placeholder="kategori"><br>
	<input type="text" name="HargaObat" placeholder="harga obat"><br>
	<input type="text" name="JumlahObat" placeholder="jumlah obat"><br>
	<input type="hidden" name="_token" value="{{csrf_token() }}"><br>
    <button class="btn btn-success">
        Create
    </button>
</form>
@endsection
