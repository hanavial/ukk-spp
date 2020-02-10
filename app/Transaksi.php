<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id_user','id_admin','date','bukti','id_status'];

    public function user(){
        return $this->hasOne('App\User','id','id_user');
    }

    public function admin(){
        return $this->hasOne('App\Admin','id','id_admin');
    }

    public function status(){
        return $this->hasOne('App\Status','id','id_status');
    }

}
