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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username',50)->unique();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',50)->unique();
            $table->string('phone_number')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_type',50)->default('user');
            $table->string('password',50);
            $table->string('status',50)->default('pending');
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
