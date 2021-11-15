<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeQualitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_qualitys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tq_name')->nullable();
            $table->string('tq_slug')->index();
            $table->tinyInteger('tq_active')->default(1)->index();
            $table->string('tq_desc')->nullable();
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
        Schema::dropIfExists('type_qualitys');
    }
}
