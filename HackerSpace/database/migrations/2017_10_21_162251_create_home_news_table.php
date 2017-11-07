<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        主页新闻表
        Schema::create('home_news', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title_h1')->comment('该news的一级标题');
            $table->text('title_h2')->comment('该news的二级标题');
            $table->text('picture_file_name')->comment('news图片的url');
            $table->text('url')->comment('了解更多的url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_news');
    }
}
