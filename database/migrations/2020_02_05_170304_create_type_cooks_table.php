<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeCooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_cooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tc_name')->nullable();
            $table->string('tc_slug')->index();
            $table->tinyInteger('tc_active')->default(1)->index();
            $table->string('tc_desc')->nullable();
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
        Schema::dropIfExists('type_cooks');
    }
}
