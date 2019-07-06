<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id_post');
            $table->string('post_title', 45);
            $table->text('post_content');
            $table->string('post_visbility', 45);
            $table->dateTime('post_create');

            $table->bigInteger('post_author')->unsigned();
            $table->foreign('post_author')
                  ->references('id_user')
                  ->on('users')
                  ->onDelete('cascade');

            $table->bigInteger('post_categories')->unsigned();
            // still dont now why cant
            // so i turn it wit manual
            // $table->foreign('post_categories')
            //       ->references('id_categories')
            //       ->on('categories')
            //       ->onDelete('cascade');

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
        Schema::dropIfExists('posts');
    }
}
