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
        Schema::create('Insignies_Usuaris', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Id', true);
            $table->integer('Id_Usuari')->index('Id_Usuari');
            $table->integer('Id_Insignia')->index('Id_Insignia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Insignies_Usuaris');
    }
};
