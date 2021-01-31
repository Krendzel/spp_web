<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupEcomOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_ecom_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order');
            $table->string('delivery_type');
            $table->string('numsup');
            $table->string('tracking_number');
            $table->unsignedBigInteger('groupecom_id');
            $table->timestamps();

            $table->foreign('groupecom_id')
                ->references('id')
                ->on('group_ecoms')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_ecom_orders');
    }
}
