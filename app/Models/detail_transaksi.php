<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    use HasFactory;
    protected $table ='detail_transaksi';

    public fuction transaksi(){
    	return $this ->belongsTo('App\Models\Transaksi');

    }

    public fuction barangs(){
    	return $this ->belongsTo('App\Models\barang');
    }
}