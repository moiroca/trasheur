<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsImagesPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_images', function (Blueprint $table) {
            $table->integer('image_id')->unsigned();
            $table->integer('post_id')->unsigned();

            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts')
                  ->onDelete('cascade');

            $table->foreign('image_id')
                  ->references('id')
                  ->on('images')
                  ->onDelete('cascade');

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
        Schema::table('posts_images', function (Blueprint $table) {
            $table->dropForeign('posts_images_post_id_foreign');
            $table->dropForeign('posts_images_image_id_foreign');
        });

        Schema::drop('posts_images');
    }
}
