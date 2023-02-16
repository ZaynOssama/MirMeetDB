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
            $table->string('firstname', 50)->nullable();
            $table->string('lastname', 50)->nullable();
            $table->string('ID-DNI', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->date('date_birth')->nullable();
            $table->date('date_registration')->nullable();
            $table->string('name_user', 50)->unique('Nom_Usuari');
            $table->string('biography', 50)->nullable();
            $table->string('password', 255);
            $table->string('email', 50)->unique('Correu_Electronic');
            $table->enum('state_verification', ['ToDo','InProgress','Done'])->nullable()->default('ToDo');
            $table->enum('blocked', ['yes','no'])->nullable()->default('no');
            $table->enum('validated', ['yes','no'])->nullable()->default('no');
            $table->foreignId('type_user_id')->constrained();
            $table->string('profile_image', 255)->nullable()->default('https://image.isu.pub/131113230020-a8648deb5fd9c8eaa505bb41f9d2d41a/jpg/page_1.jpg');
            $table->enum('profile_type', ['public', 'private'])->nullable()->default('public');
            // $table->foreign('follow_id')
            // ->references('id')
            // ->on('follows')
            // ->onDelete('cascade')
            // ->constrained();
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
};
