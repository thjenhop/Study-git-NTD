<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPriorityAndPriceToTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
//            $table->unsignedTinyInteger('priority_post')->nullable(false)->default(0)->comment('Độ ưu tiên của bài viết');
//            $table->unsignedDouble('post_price', 15, 3)->nullable(false)->default(0)->comment('Gía đăng bài viết');
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
