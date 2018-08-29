<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalColumnsToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('featured_image')->nullable();
            $table->string('teaser')->nullable();
            $table->string('message')->nullable();
            $table->string('address')->nullable();
            $table->string('nearest_station')->nullable();
            $table->string('open_hours')->nullable();
            $table->string('holiday')->nullable();
            $table->string('website')->nullable();
            $table->string('airport')->nullable();
            $table->string('language')->nullable();
            $table->string('temparature')->nullable();
            $table->string('manner')->nullable();
            $table->string('sunrise')->nullable();
            $table->string('restrooms')->nullable();
            $table->string('coupon')->nullable();
            $table->string('gmaps')->nullable();
            $table->string('events')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
