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
<form action="/pembayaran/{{$var->NomorByr}}" method="post">
    <input type="text" name="" value="{{$var->NomorByr}}" disabled><br>
    <input type="text" name="pas" value="{{$var->KodePsn}}" placeholder="Kode Pasien"><br>
    <input type="date" name="tgl" value="{{$var->TanggalByr}}" placeholder="Tanggal Bayar"><br>
    <input type="number" name="bay" value="{{$var->JumlahByr}}" placeholder="Jumlah Bayar"><br>
    <button class="btn btn-success">
        Edit
    </button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
@endsection
