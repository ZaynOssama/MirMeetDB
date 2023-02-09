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
        Schema::table('Notificacio', function (Blueprint $table) {
            $table->foreign(['Id_Retweet'], 'Notificacio_ibfk_1')->references(['Id'])->on('Retweet')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Usuari'], 'Notificacio_ibfk_2')->references(['Id'])->on('Usuari')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Magrada'], 'Notificacio_ibfk_3')->references(['Id'])->on('Magrada')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Id_Publicacio'], 'Notificacio_ibfk_4')->references(['Id'])->on('Publicacio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Notificacio', function (Blueprint $table) {
            $table->dropForeign('Notificacio_ibfk_1');
            $table->dropForeign('Notificacio_ibfk_2');
            $table->dropForeign('Notificacio_ibfk_3');
            $table->dropForeign('Notificacio_ibfk_4');
        });
    }
};
