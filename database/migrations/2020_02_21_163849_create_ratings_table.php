<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ra_store_id')->index()->default(0);
            $table->tinyInteger('ra_number_space')->default(0);
            $table->tinyInteger('ra_number_position')->default(0);
            $table->tinyInteger('ra_number_serve')->default(0);
            $table->tinyInteger('ra_number_quality')->default(0);
            $table->tinyInteger('ra_number_price')->default(0);
            $table->string('ra_content')->nullable();
            $table->integer('ra_user_id')->index()->default(0);

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
        Schema::dropIfExists('ratings');
    }
}
