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
        Schema::table('insignies__usuaris', function (Blueprint $table) {
            $table->foreign(['Id_Usuari'], 'insignies__usuaris_ibfk_1')->references(['Id'])->on('usuaris')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Insignia'], 'insignies__usuaris_ibfk_2')->references(['Id'])->on('insignies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('insignies__usuaris', function (Blueprint $table) {
            $table->dropForeign('insignies__usuaris_ibfk_1');
            $table->dropForeign('insignies__usuaris_ibfk_2');
        });
    }
};
