@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pembayaran</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="pembayaran/create">
                        <button class="btn btn-success">
                            Create
                        </button>
                    </a>
                    <form class="form-inline mt-2 mt-md-0" method="get" action="/pembayaran">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    <!-- TABLE MULAI DISINI -->
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Nomor Pembayaran</th>
                                <th>Kode Pasien</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Jumlah Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($var as $var)
                                <tr>
                                    <td>{{ $var->NomorByr}}</td>
                                    <td>{{ $var->KodePsn}}</td>
                                    <td>{{ $var->TanggalByr}}</td>
                                    <td>{{ $var->JumlahByr}}</td>
                                    <td>
                                        <a href="/pembayaran/{{$var->NomorByr}}/edit">
                                            <button class="btn btn-warning">
                                                Edit
                                            </button>
                                        </a>
                                        <form action="/pembayaran/{{$var->NomorByr}}" method="post">
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
