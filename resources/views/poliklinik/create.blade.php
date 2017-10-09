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
<form action="/poli" method="post">
    <input type="text" name="NamaPlk" value="" placeholder="Nama"><br>
    <button class="btn btn-success">
        Create
    </button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
