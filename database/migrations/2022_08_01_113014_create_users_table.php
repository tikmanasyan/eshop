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
            $table->string("name");
            $table->enum("gender", ["male", "female"]);
            $table->string("avatar");
            $table->date("birth_date");
            $table->string("email")->unique();
            $table->string("password");
            $table->boolean("is_verify")->default(0);
            $table->boolean("is_active")->default(0);
            $table->unsignedBigInteger("role_id");
            $table->timestamps();
            $table->foreign("role_id")->references("id")->on("roles");
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
