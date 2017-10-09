<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'NomorPendf';
    public $timestamps = false;
}
