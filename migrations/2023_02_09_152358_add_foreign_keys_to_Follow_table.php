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
        Schema::table('Follow', function (Blueprint $table) {
            $table->foreign(['Id_Usuari'], 'Follow_ibfk_1')->references(['Id'])->on('Usuari')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Seguir'], 'Follow_ibfk_2')->references(['Id_Seguir'])->on('Usuari')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Follow', function (Blueprint $table) {
            $table->dropForeign('Follow_ibfk_1');
            $table->dropForeign('Follow_ibfk_2');
        });
    }
};
