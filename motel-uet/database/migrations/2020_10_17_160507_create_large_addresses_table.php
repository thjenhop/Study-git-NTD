<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLargeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('large_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->unsignedInteger('province_id')->nullable(false);
            $table->unsignedInteger('district_id')->nullable(false);
            $table->decimal('lat', 18, 15)->nullable(false)->comment('Vĩ độ trên bản đồ');
            $table->decimal('lng', 18, 15)->nullable(false)->comment('Kinh độ trên bản đồ');
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
        Schema::dropIfExists('large_addresses');
    }
}
