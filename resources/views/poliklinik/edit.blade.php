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
<form action="/poli/{{$var->KodePlk}}" method="post">
    <input type="text" name="NamaPlk" value="{{$var->NamaPlk}}"><br>
    <button class="btn btn-success">
        Edit
    </button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
@endsection
