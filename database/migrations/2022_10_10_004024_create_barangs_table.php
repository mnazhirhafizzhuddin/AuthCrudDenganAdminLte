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
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('idbarang');
            $table->String('Namabarang');
            $table->bigInteger('idruangan')->unsigned();
            $table->timestamps();
        });
        Schema::table('barangs', function($table) {
            $table->foreign('idruangan')->references('id')->on('dataasets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
