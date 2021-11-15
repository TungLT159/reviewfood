<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('st_name')->nullable();
            $table->string('st_slug')->index();
            $table->string('st_price')->nullable();
            $table->integer('st_phone')->nullable()->default(0);
            $table->tinyInteger('st_sale')->default(0);
            $table->string('st_timeOpen')->nullable();
            $table->string('st_address')->nullable();
            $table->tinyInteger('st_active')->default(1)->index();
            $table->text('st_lat')->nullable()->index();
            $table->text('st_lng')->nullable()->index();
            $table->string('st_avatar')->nullable();
            $table->tinyInteger('st_hot')->default(0);
            $table->tinyInteger('st_activeOpen')->default(0);
            $table->integer('st_category_id')->index()->default(0);
            $table->integer('st_typeQuality_id')->nullable()->index()->default(0);
            $table->integer('st_area_id')->index()->default(0);
            $table->integer('st_typeCook_id')->nullable()->index()->default(0);
            $table->integer('st_typeProduct_id')->nullable()->index()->default(0);
            $table->string('st_desc_seo')->nullable();

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
        Schema::dropIfExists('stores');
    }
}
