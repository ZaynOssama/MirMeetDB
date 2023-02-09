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
        Schema::table('Magrada', function (Blueprint $table) {
            $table->foreign(['Id_Publicacio'], 'Magrada_ibfk_1')->references(['Id'])->on('Publicacio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Magrada', function (Blueprint $table) {
            $table->dropForeign('Magrada_ibfk_1');
        });
    }
};
