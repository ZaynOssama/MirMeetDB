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
        Schema::table('publicacios', function (Blueprint $table) {
            $table->foreign(['Id_Usuari'], 'publicacios_ibfk_1')->references(['Id'])->on('usuaris')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Publicacio'], 'publicacios_ibfk_2')->references(['Id'])->on('publicacios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicacios', function (Blueprint $table) {
            $table->dropForeign('publicacios_ibfk_1');
            $table->dropForeign('publicacios_ibfk_2');
        });
    }
};
