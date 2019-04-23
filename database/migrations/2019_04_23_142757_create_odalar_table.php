<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdalarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odalar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('ev_tipi');
            $table->string('oda_tipi');
            $table->string('liste_adi');
            $table->string('adres');
            $table->integer('kalabilecek_Kisi_sayısı');
            $table->integer('yatak_odasi_sayisi');
            $table->integer('banyo_sayisi');
            $table->integer('fiyat');
            $table->text('ozet');
            $table->text('slug');
            $table->boolean('tv')->default(0);
            $table->boolean('mutfak')->default(0);
            $table->boolean('isitma')->default(0);
            $table->boolean('internet')->default(0);
            $table->boolean('aktif')->default(0);
            $table->boolean('havalandirma')->default(0);
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
        Schema::dropIfExists('odalar');
    }
}
