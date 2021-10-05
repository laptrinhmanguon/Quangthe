<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuonsachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muonsach', function (Blueprint $table) {
            $table->increments('id_muon');
            $table->integer('id_nguoidung')->unique();
            $table->integer('id_sach');
            $table->dateTime('ngaymuon');
            $table->unsignedInteger('id_Kmuonsach');
            $table->foreign('id_Kmuonsach')->references('id_sach')->on('sach');
            $table->unsignedInteger('id_K_M_muonsach');
            $table->foreign('id_K_M_muonsach')->references('id_nguoidung')->on('nguoidung');
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
        Schema::dropIfExists('muonsach');
    }
}
