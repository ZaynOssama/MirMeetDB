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
        Schema::create('Magrada', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Id', true);
            $table->dateTime('Data')->nullable();
            $table->integer('Id_Publicacio')->index('Id_Publicacio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Magrada');
    }
};
