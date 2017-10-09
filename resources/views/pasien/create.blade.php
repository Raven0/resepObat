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
<form action="/pasien" method="post">
    <input type="text" name="KodePsn" value="" placeholder="Kode Pasien" disabled="true"><br>
    <input type="text" name="NamaPsn" value="" placeholder="Nama Pasien"><br>
    <input type="text" name="AlamatPsn" value="" placeholder="Alamat Pasien"><br>
    <input type="text" name="GenderPsn" value="" placeholder="Gender Pasien"><br>
    <input type="text" name="UmurPsn" value="" placeholder="Umur Pasien"><br>
    <input type="integer" name="TeleponPsn" value="" placeholder="Telepon Pasien"><br>
    <button class="btn btn-success">
        Create
    </button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
