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
<form action="/detail" method="POST">
    <input type="text" name="NomorResep" placeholder="nomor resep"><br>
	<input type="text" name="KodeObat" placeholder="kode obat"><br>
	<input type="text" name="Harga" placeholder="harga"><br>
	<input type="text" name="Dosis" placeholder="dosis"><br>
	<input type="text" name="SubTotal" placeholder="sub total"><br>
	<input type="hidden" name="_token" value="{{csrf_token() }}"><br>
    <button class="btn btn-success">
        Create
    </button>
</form>
@endsection
