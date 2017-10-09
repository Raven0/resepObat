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
<form action="/pembayaran" method="post">
    <input type="text" name="pas" value="" placeholder="Kode Pasien"><br>
    <input type="date" name="tgl" value="" placeholder="Tanggal Bayar"><br>
    <input type="number" name="bay" value="" placeholder="Jumlah Bayar"><br>
    <button class="btn btn-success">
        Create
    </button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
