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
        Schema::create('Publicacio', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Id', true);
            $table->string('Ref_swp')->nullable();
            $table->string('Comentari', 150)->nullable();
            $table->integer('Id_Publicacio')->nullable()->index('Id_Publicacio');
            $table->integer('Id_Usuari')->index('Id_Usuari');
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
        Schema::dropIfExists('Publicacio');
    }
};
