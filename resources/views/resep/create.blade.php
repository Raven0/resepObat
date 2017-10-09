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
<form action="/resep" method="post">
					    <input type="integer" name="NomorResep" value="" placeholder="Nomor Resep" disabled="true"><br>
					    <input type="date" name="TanggalResep" value="" placeholder="Tanggal Resep"><br>
					    <input type="integer" name="KodeDkt" value="" placeholder="Kode Dokter"><br>
					    <input type="integer" name="KodePsn" value="" placeholder="Kode Pasien"><br>
					    <input type="integer" name="KodePlk" value="" placeholder="Kode Poliklinik"><br>
					    <input type="float" name="TotalHarga" value="" placeholder="Total Harga"><br>
					    <input type="float" name="Bayar" value="" placeholder="Bayar"><br>
					    <input type="text" name="Kembali" value="" placeholder="Kembali"><br><br>
                        <button class="btn btn-success">
                            Create
                        </button>
					    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
