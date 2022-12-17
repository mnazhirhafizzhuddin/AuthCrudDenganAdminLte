<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataasets', function (Blueprint $table) {
            $table->id()->unique();
            $table->bigInteger('Noruangan');
            $table->string('Nama_ruangan');
            $table->enum('Keterangan_ruangan',['Digunakan','Tidak-digunakan']);
            $table->string('Fungsi');
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
        Schema::dropIfExists('dataasets');
    }
};
