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
<form action="/pasien/{{$var->KodePsn}}" method="post">
<input type="text" name="KodePsn" value="{{$var->KodePsn}}" placeholder="Kode Pasien" disabled="true"><br>
    <input type="text" name="NamaPsn" value="{{$var->NamaPsn}}" placeholder="Nama Pasien"><br>
    <input type="text" name="AlamatPsn" value="{{$var->AlamatPsn}}" placeholder="Alamat Pasien"><br>
    <input type="text" name="GenderPsn" value="{{$var->GenderPsn}}" placeholder="Gender Pasien"><br>
    <input type="text" name="UmurPsn" value="{{$var->UmurPsn}}" placeholder="Umur Pasien"><br>
    <input type="integer" name="TeleponPsn" value="{{$var->TeleponPsn}}" placeholder="Telepon Pasien"><br>
    <button class="btn btn-success">
        Edit
    </button>

    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
@endsection
