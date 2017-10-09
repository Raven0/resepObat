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
<form action="/pendaftaran" method="post">
    <input type="date" name="tgl" value="" placeholder="Tanggal Pendaftaran"><br>
    <input type="text" name="dok" value="" placeholder="Kode Dokter"><br>
    <input type="text" name="pas" value="" placeholder="Kode Pasien"><br>
    <input type="text" name="pol" value="" placeholder="Kode Poliklinik"><br>
    <input type="number" name="biaya" value="" placeholder="Biaya Pendaftaran"><br>
    <input type="text" name="ket" value="" placeholder="Keterangan"><br>
    <button class="btn btn-success">
        Create
    </button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
