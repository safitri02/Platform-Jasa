<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->nullable()->constrained('users');
            $table->foreignId('freelancer_id')->nullable()->constrained('users');
            $table->foreignId('service_id')->nullable()->constrained('service');
            $table->text('file')->nullable();
            $table->text('note')->nullable();
            $table->date('expired')->nullable();
            $table->foreignId('order_status_id')->nullable()->constrained('order_status');
            $table->softDeletes();
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
        Schema::dropIfExists('order');
    }
}
