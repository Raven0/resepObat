<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <style>
        #asd{
            align-self: center;
        }
        table{
            margin: 20px;
            text-align: left;
        }
        .same{
            width: 100px;
        }
        </style>
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout">
          <header class="mdl-layout__header">
            <div class="mdl-layout-icon"></div>
            <div class="mdl-layout__header-row">
              <span class="mdl-layout__title">Resep Obat</span>
              <div class="mdl-layout-spacer"></div>
              <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="pendaftaran">Pendaftaran</a>
                <a class="mdl-navigation__link" href="pembayaran">Pembayaran</a>
              </nav>
            </div>
          </header>
          <div class="mdl-layout__drawer">
            <span class="mdl-layout__title">Resep Obat</span>
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="/">Main Menu</a>
              <a class="mdl-navigation__link" href="pendaftaran">Pendaftaran</a>
              <a class="mdl-navigation__link" href="pembayaran">Pembayaran</a>
            </nav>
          </div>
          <main class="mdl-layout__content" id="asd">
              <table class="mdl-data-table mdl-js-data-table">
                  <thead>
                      <tr>
                          <th>
                              <a href="pendaftaran/create"> Create </a>
                          </th>
                          <th colspan="7">
                              Search
                          </th>
                      </tr>
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
                                      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect same">
                                          Edit
                                      </button>
                                  </a>
                                  <form action="/pendaftaran/{{$var->NomorPendf}}" method="post">
                                      <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                      <input type="hidden" value="delete" name="_method">
                                      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect same">
                                          Delete
                                      </button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </main>
        </div>
    </body>
</html>
