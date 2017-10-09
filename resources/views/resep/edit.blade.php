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
<form action="/resep/{{$var->NomorResep}}" method="post">
					    <input type="integer" name="NomorResep" value="{{$var->NomorResep}}" placeholder="Nomor Resep"><br>
					    <input type="datetime" name="TanggalResep" value="{{$var->TanggalResep}}" placeholder="Tanggal Resep"><br>
					    <input type="integer" name="KodeDkt" value="{{$var->KodeDkt}}" placeholder="Kode Dokter"><br>
					    <input type="integer" name="KodePsn" value="{{$var->KodePsn}}" placeholder="Kode Pasien"><br>
					    <input type="integer" name="KodePlk" value="{{$var->KodePlk}}" placeholder="Kode Poliklinik"><br>
					    <input type="float" name="TotalHarga" value="{{$var->TotalHarga}}" placeholder="Total Harga"><br>
					    <input type="float" name="Bayar" value="{{$var->Bayar}}" placeholder="Bayar"><br>
					    <input type="text" name="Kembali" value="{{$var->Kembali}}" placeholder="Kembali"><br><br>
                        <button class="btn btn-success">
                            Edit
                        </button>
					    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    					<input type="hidden" value="put" name="_method">
</form>
@endsection
