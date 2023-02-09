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
        Schema::table('follows', function (Blueprint $table) {
            $table->foreign(['Id_Usuari'], 'follows_ibfk_1')->references(['Id'])->on('usuaris')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Seguir'], 'follows_ibfk_2')->references(['Id_Seguir'])->on('usuaris')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('follows', function (Blueprint $table) {
            $table->dropForeign('follows_ibfk_1');
            $table->dropForeign('follows_ibfk_2');
        });
    }
};
