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
        Schema::table('Insignies_Usuaris', function (Blueprint $table) {
            $table->foreign(['Id_Usuari'], 'Insignies_Usuaris_ibfk_1')->references(['Id'])->on('Usuari')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Insignia'], 'Insignies_Usuaris_ibfk_2')->references(['Id'])->on('Insignies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Insignies_Usuaris', function (Blueprint $table) {
            $table->dropForeign('Insignies_Usuaris_ibfk_1');
            $table->dropForeign('Insignies_Usuaris_ibfk_2');
        });
    }
};
