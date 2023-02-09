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
        Schema::create('Notificacio', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Id')->primary();
            $table->string('missatge', 50);
            $table->integer('Id_Retweet')->nullable()->index('Id_Retweet');
            $table->integer('Id_Magrada')->nullable()->index('Id_Magrada');
            $table->integer('Id_Usuari')->index('Id_Usuari');
            $table->integer('Id_Publicacio')->index('Id_Publicacio');
            $table->date('Censurat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Notificacio');
    }
};
