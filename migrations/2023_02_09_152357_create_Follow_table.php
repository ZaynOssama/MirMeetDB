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
        Schema::create('Follow', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Id', true);
            $table->integer('Id_Usuari')->nullable()->index('Id_Usuari');
            $table->integer('Id_Seguir')->nullable()->index('Follow_ibfk_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Follow');
    }
};
