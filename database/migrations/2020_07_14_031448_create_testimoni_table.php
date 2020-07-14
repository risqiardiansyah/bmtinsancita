<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('testimoni'))
        {
            Schema::dropIfExists('testimoni');
        }
        Schema::create('testimoni', function (Blueprint $table) {
            $table->uuid('id',255)->primary();
            $table->integer('id_produk');
            $table->string('nama_lengkap',255);
            $table->string('email',255);
            $table->string('pekerjaan',255);
            $table->text('message');
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
        Schema::dropIfExists('testimoni');
    }
}
