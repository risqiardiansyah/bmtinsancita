<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('service'))
        {
            Schema::dropIfExists('service');
        }
        Schema::create('service', function (Blueprint $table) {
            $table->uuid('id',255)->primary();
            $table->string('setting_title_service_1',255);
            $table->string('setting_service_1',255);
            $table->string('setting_title_service_2',255);
            $table->string('setting_service_2',255);
            $table->string('setting_title_service_3',255);
            $table->string('setting_service_3',255);
            $table->string('setting_title_service_4',255);
            $table->string('setting_service_4',255);
            $table->string('setting_logo_service_1',255);
            $table->string('setting_logo_service_2',255);
            $table->string('setting_logo_service_3',255);
            $table->string('setting_logo_service_4',255);
            $table->integer('id_user');
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
        Schema::dropIfExists('service');
    }
}
