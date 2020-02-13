<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade');
            $table->date('date');
            $table->text('bukti');
            $table->text('keterangan');
            $table->integer('id_status')->unsigned();
            $table->foreign('id_status')->references('id')->on('status')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
