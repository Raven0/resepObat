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
<form action="/detail/{{$var->id}}" method="post">
	<input type="string" name="NomorResep" value="{{$var->NomorResep}}" placeholder="nomor resep"><br>
	<input type="string" name="KodeObat" value="{{$var->KodeObat}}" placeholder="kode obat"><br>
	<input type="string" name="Harga" value="{{$var->Harga}}" placeholder="harga"><br>
	<input type="string" name="Dosis" value="{{$var->Dosis}}" placeholder="dosis"><br>
	<input type="string" name="SubTotal" value="{{$var->SubTotal}}" placeholder="sub total"><br>
    <input type="hidden" value="{{ csrf_token() }}" name="_token"><br>
    <input type="hidden" value="put" name="_method"><br>
    <button class="btn btn-success">
        Edit
    </button>
</form>
@endsection
