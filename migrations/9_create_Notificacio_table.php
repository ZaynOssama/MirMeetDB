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
        Schema::create('notificacios', function (Blueprint $table) {
            $table->id();
            $table->string('missatge', 50);
            $table->foreignId('retweet_id')
            ->references('id')
            ->on('retweets')
            ->onDelete('cascade')
            ->constrained();
            $table->foreignId('magrada_id')
            ->references('id')
            ->on('magradas')
            ->onDelete('cascade')
            ->constrained();
            $table->foreignId('usuari_id')
            ->references('id')
            ->on('usuaris')
            ->onDelete('cascade')
            ->constrained();
            $table->foreignId('publicacio_id')
            ->references('id')
            ->on('publicacios')
            ->onDelete('cascade')
            ->constrained();
            $table->date('Censurat')->nullable();
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
        Schema::dropIfExists('notificacios');
    }
};
