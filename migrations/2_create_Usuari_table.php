<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('username');
            $table->string('dni');
            $table->string('phone');
            $table->string('birthdate');
            $table->string('bibliografy');
            $table->string('email')->unique();
            $table->enum('role', ['admin', 'client'])->default('client');
            $table->enum('access', ['yes', 'no', 'denied', 'banned'])->default('no');
            $table->enum('verified', ['yes', 'no'])->default('no');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('external_id')->nullable();
            $table->string('external_auth')->nullable();
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

    /**
     */
    public function __construct() {
    }
};
