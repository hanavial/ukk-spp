<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBulanTransaksi extends Model
{
    protected $table = 'detail_bulan_transaksi';
    protected $fillable = ['id_transaksi','id_user','id_admin','id_bulan','attr'];

    public function transaksi(){
        return $this->hasOne('App\Transaksi','id','id_transaksi');
    }

    public function user(){
        return $this->hasOne('App\User','id','id_user');
    }

    public function admin(){
        return $this->hasOne('App\Admin','id','id_admin');
    }

    public function bulan(){
        return $this->hasOne('App\Bulan','id','id_bulan');
    }

}
