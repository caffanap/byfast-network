<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pakets_id');
            $table->foreign('pakets_id')->references('id')->on('pakets')->onDelete('cascade');
            $table->foreignId('topping_pakets_id')->nullable();
            $table->foreign('topping_pakets_id')->references('id')->on('topping_pakets')->onDelete('cascade');
            $table->string('no_pemesanan');
            $table->integer('total_harga');
            $table->string('nama_lengkap');
            $table->string('nomor_identitas');
            $table->string('no_hp')->nullable();
            $table->enum('jenkel', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->text('alamat')->nullable();
            $table->enum('status_pemesanan', ['pending', 'proses', 'done'])->default('pending');
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
        Schema::dropIfExists('pemesanans');
    }
}
