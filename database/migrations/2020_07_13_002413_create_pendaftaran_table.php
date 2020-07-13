<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('pendaftaran'))
        {
            Schema::dropIfExists('pendaftaran');
        }
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->uuid('id',255)->primary();
            $table->string('nomer_induk',255);
            $table->string('nama_lengkap',255);
            $table->string('no_ktp',255)->unique();
            $table->string('no_kk',255)->unique();
            $table->string('no_whatsapp',255)->unique();
            $table->string('pekerjaan',255);
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
        Schema::dropIfExists('pendaftaran');
    }
}
