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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('images')->nullable();
            $table->string('comment', 150)->nullable();
            $table->foreignId('publication_id')
            ->references('id')
            ->on('publications')
            ->onDelete('cascade')
            ->constrained();
            
            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->constrained();
            
            $table->date('censored')->nullable();
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
