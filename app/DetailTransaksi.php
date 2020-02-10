<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $fillable = ['id_transaksi','id_spp'];

    public function transaksi(){
        return $this->hasOne('App\Transaksi','id','id_transaksi');
    }

    public function spp(){
        return $this->hasOne('App\Spp','id','id_spp');
    }
}
