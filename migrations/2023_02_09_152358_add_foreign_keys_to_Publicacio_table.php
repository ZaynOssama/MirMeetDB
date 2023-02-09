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
        Schema::table('Publicacio', function (Blueprint $table) {
            $table->foreign(['Id_Usuari'], 'Publicacio_ibfk_1')->references(['Id'])->on('Usuari')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Publicacio'], 'Publicacio_ibfk_2')->references(['Id'])->on('Publicacio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Publicacio', function (Blueprint $table) {
            $table->dropForeign('Publicacio_ibfk_1');
            $table->dropForeign('Publicacio_ibfk_2');
        });
    }
};
