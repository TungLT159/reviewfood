<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnRatingInTableStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {

            $table->integer('st_total_rating')->default(0);
            $table->integer('st_total_number')->default(0);
            $table->integer('st_total_space')->default(0);
            $table->integer('st_total_position')->default(0);
            $table->integer('st_total_serve')->default(0);
            $table->integer('st_total_quality')->default(0);
            $table->integer('st_total_price')->default(0);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {

            $table->dropColumn('st_total_rating');
            $table->dropColumn('st_total_number');
            $table->dropColumn('st_total_space');
            $table->dropColumn('st_total_position');
            $table->dropColumn('st_total_serve');
            $table->dropColumn('st_total_quality');
            $table->dropColumn('st_total_price');
        });
    }
}
