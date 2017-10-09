@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pembayaran</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="pendaftaran/create">
                        <button class="btn btn-success">
                            Create
                        </button>
                    </a>

                    <!-- TABLE MULAI DISINI -->
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Nomor Pendaftaran</th>
                                <th>Tanggal Pendaftaran</th>
                                <th>Kode Dokter</th>
                                <th>Kode Pasien</th>
                                <th>Kode Poliklinik</th>
                                <th>Biaya Pendaftaran</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($var as $var)
                                <tr>
                                    <td>{{ $var->NomorPendf}}</td>
                                    <td>{{ $var->TanggalPendf}}</td>
                                    <td>{{ $var->KodeDkt}}</td>
                                    <td>{{ $var->KodePsn}}</td>
                                    <td>{{ $var->KodePlk}}</td>
                                    <td>{{ $var->Biaya}}</td>
                                    <td>{{ $var->Ket}}</td>
                                    <td>
                                        <a href="/pendaftaran/{{$var->NomorPendf}}/edit">
                                            <button class="btn btn-warning">
                                                Edit
                                            </button>
                                        </a>
                                        <form action="/pendaftaran/{{$var->NomorPendf}}" method="post">
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                            <input type="hidden" value="delete" name="_method">
                                            <button class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
