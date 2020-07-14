<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tim'))
        {
            Schema::dropIfExists('tim');
        }
        Schema::create('tim', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('foto');
            $table->string('nama_lengkap',255);
            $table->string('jabatan',255);
            $table->string('telp',255);
            $table->string('facebook',255);
            $table->string('linkedin',255);

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
        Schema::dropIfExists('tim');
    }
}
