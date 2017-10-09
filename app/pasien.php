<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    //
    protected $table = 'pasien';
    public $timestamps = false;
    protected $primaryKey = 'KodePsn';
}
