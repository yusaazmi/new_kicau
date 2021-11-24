<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_burung');
            $table->decimal('total_price',20,2)->nullable();
            $table->string('cod')->nullable();
            $table->string('snap_token',36)->nullable();
            $table->string('status',40)->nullable();
            $table->unsignedBigInteger('seller_id');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('id_burung')->references('id')->on('birds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
