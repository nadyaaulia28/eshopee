<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";

    public function detail_transaksi(){
    	return $this->hasMany('App\Models\detail_transaksi');
    }
}