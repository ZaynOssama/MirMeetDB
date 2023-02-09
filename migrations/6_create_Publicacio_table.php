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
        Schema::create('publicacios', function (Blueprint $table) {
            $table->id();
            $table->string('Ref_swp')->nullable();
            $table->string('Comentari', 150)->nullable();
            $table->foreignId('publicacio_id')
            ->references('id')
            ->on('publicacios')
            ->onDelete('cascade')
            ->constrained();
            $table->foreignId('usuari_id')
            ->references('id')
            ->on('usuaris')
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
        Schema::dropIfExists('publicacios');
    }
};
