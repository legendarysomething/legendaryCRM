<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username',50)->unique();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email')->unique();
            $table->string('password',200);
            $table->rememberToken();
            $table->integer('phonenumber')->nullable();
            $table->text('description')->nullable();
            $table->string('gender',2)->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('referrer',50)->nullable();
            $table->tinyInteger('deactivated')->default(0);
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
