<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string("path")->nullable();
            $table->string("title")->nullable();
            $table->string("content")->nullable();
            $table->integer("downloads")->nullable();
            $table->json("pages")->nullable()->comment('定义图片需要在哪些页面展示');
            $table->boolean("isSquare")->default(false)->comment('图片宽高比是否1:1');
            $table->timestamp("created_at")->nullable();
            $table->timestamp("updated_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
