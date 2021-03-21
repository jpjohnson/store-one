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
        Schema::dropIfExists('orders');
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('inventory_id');
            $table->text('street_address')->nullable();
            $table->text('apartment')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->string('country_code')->nullable();
            $table->text('zip')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('email')->nullable();
            $table->string('name')->nullable();
            $table->string('order_status')->nullable();
            $table->text('payment_ref')->nullable();
            $table->string('transaction_id')->nullable();
            $table->text('payment_amt_cents')->nullable();
            $table->text('ship_charged_cents')->nullable();
            $table->text('ship_cost_cents')->nullable();
            $table->text('subtotal_cents')->nullable();
            $table->text('total_cents')->nullable();
            $table->text('shipper_name')->nullable();
            $table->timestamp('payment_date')->nullable();
            $table->timestamp('shipped_date')->nullable();
            $table->text('tracking_number')->nullable();
            $table->integer('tax_total_cents')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
