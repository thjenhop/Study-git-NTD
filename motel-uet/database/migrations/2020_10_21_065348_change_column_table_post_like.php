<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnTablePostLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_like', function (Blueprint $table) {
            if (Schema::hasColumn('post_like', 'creator_id')) {
                $table->renameColumn('creator_id', 'user_id');
            }
            $table->softDeletes('delete_at', 0);
            if (Schema::hasColumn('post_like', 'quantity')) {
                $table->dropColumn('quantity');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_like', function (Blueprint $table) {
            //
        });
    }
}
