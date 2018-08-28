<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn')->unique()->comment('国际标准书号');
            $table->string('openid')->comment('入库用户的微信唯一标识');
            $table->string('title')->comment('中文书名');
            $table->string('image')->comment('书籍照片');
            $table->string('author')->comment('作者');
            $table->string('author_intro')->comment('作者简介');
            $table->string('pages')->comment('总页码');
            $table->string('alt')->comment('豆瓣详情链接地址');
            $table->string('tags')->comment('关键字');
            $table->string('publisher')->comment('出版社');
            $table->date('publish_time')->comment('出版时间');
            $table->string('summary')->comment('书籍摘要');
            $table->string('catalog')->comment('目录分类');
            $table->string('old_price')->comment('初始出版价');
            $table->string('new_price')->nullable()->comment('平台在售价');
            $table->string('rate')->nullable()->comment('十分制豆瓣评分');
            $table->string('pay_url')->nullable()->comment('购买地址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
