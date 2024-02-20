<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outlet_id');
            $table->foreignId('paket_id');
            $table->string('kode_invoice',100)->unique();
            $table->foreignId('member_id');
            $table->timestamp('tgl')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('batas_waktu')->nullable();
            $table->dateTime('tgl_bayar')->nullable();
            $table->integer('biaya_tambahan');
            $table->double('diskon')->nullable();
            $table->integer('pajak')->nullable();
            $table->integer('qty');
            $table->enum('status',['Baru','Proses','Selesai','Diambil']);
            $table->enum('dibayar',['Dibayar','Belum dibayar']);
            $table->foreignId('user_id');
            $table->timestamps();
            // $table->foreign('outlet_id')->references('id')->on('outlets');
            // $table->foreign('member_id')->references('id')->on('members');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
