<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password_plain');
            $table->string('password_hash');
            $table->boolean('superadmin');
            $table->string('shop_name');
            $table->string('card_brand');
            $table->string('card_last_four');
            $table->timestamp('trial_ends_at')->nullable();
            $table->string('shop_domain');
            $table->boolean('is_enabled');
            $table->string('billing_plan');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
