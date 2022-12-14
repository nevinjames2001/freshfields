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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->boolean('is_user')->default(1);
            $table->boolean('is_doctor')->nullable();
            $table->string('password');
            $table->string('veterinarian_id')->nullable();
            $table->string('token')->nullable();
            $table->integer('connection_id')->nullable();
            $table->enum('user_status',['Online','Offline'])->nullable();;
            $table->string('user_image')->nullable();;
            $table->integer('phone')->nullable();;
            $table->string('address')->nullable();;
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
