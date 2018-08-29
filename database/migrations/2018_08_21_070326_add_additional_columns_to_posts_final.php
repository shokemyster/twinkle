<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalColumnsToPostsFinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('post_type');
            $table->string('image_photo1')->nullable();
            $table->string('image_photo1_caption')->nullable();
            $table->string('image_photo2')->nullable();
            $table->string('image_photo2_caption')->nullable();
            $table->string('image_food1')->nullable();
            $table->string('image_food1_caption')->nullable();
            $table->string('image_food2')->nullable();
            $table->string('image_food2_caption')->nullable();
            $table->string('image_food3')->nullable();
            $table->string('image_food3_caption')->nullable();
            $table->string('image_food4')->nullable();
            $table->string('image_food4_caption')->nullable();
            $table->string('image_food5')->nullable();
            $table->string('image_food5_caption')->nullable();
            $table->string('image_souvenier1')->nullable();
            $table->string('image_souvenier1_caption')->nullable();
            $table->string('image_souvenier2')->nullable();
            $table->string('image_souvenier2_caption')->nullable();
            $table->string('image_souvenier3')->nullable();
            $table->string('image_souvenier3_caption')->nullable();
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
