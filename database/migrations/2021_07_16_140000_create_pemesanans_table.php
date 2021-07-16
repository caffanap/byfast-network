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
            $table->foreignId('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('pakets_id');
            $table->foreign('pakets_id')->references('id')->on('pakets')->onDelete('cascade');
            $table->foreignId('topping_pakets_id');
            $table->foreign('topping_pakets_id')->references('id')->on('topping_pakets')->onDelete('cascade');
            $table->integer('total_harga');
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
