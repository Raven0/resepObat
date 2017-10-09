<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bayar extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'NomorByr';
    public $timestamps = false;
}
