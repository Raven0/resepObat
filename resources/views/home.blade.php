@extends('layouts.app')

@section('panelhead')
Dashboard
@endsection

@section('create')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<a href="pendaftaran">Menu Pendaftaran</a>
<br>
<a href="pembayaran">Menu Pembayaran</a>
<br>
<a href="dokter">Menu Dokter</a>
<br>
<a href="poli">Menu Poliklinik</a>
<br>
<a href="obat">Menu Obat</a>
<br>
<a href="detail">Menu Detail</a>
<br>
<a href="pasien">Menu Pasien</a>
<br>
<a href="resep">Menu Resep</a>
@endsection
