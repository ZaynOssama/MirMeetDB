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
        Schema::create('Usuari', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Id', true);
            $table->string('Nom', 50)->nullable();
            $table->string('Cognom', 50)->nullable();
            $table->string('DNI', 50)->nullable();
            $table->string('Telefon', 50)->nullable();
            $table->date('Data_Naixement')->nullable();
            $table->date('Data_Inscripcio')->nullable();
            $table->string('Nom_Usuari', 50)->unique('Nom_Usuari');
            $table->string('Biografia', 50)->nullable();
            $table->string('Contrasenya', 50);
            $table->string('Correu_Electronic', 50)->unique('Correu_Electronic');
            $table->boolean('Estat_Verificacio')->nullable();
            $table->boolean('Bloquejat')->nullable();
            $table->boolean('Validat')->nullable();
            $table->integer('Id_Tipus_Usuari')->index('Id_Tipus_Usuari');
            $table->string('Perfil_image')->nullable();
            $table->enum('Tipus_Perfil', ['t_public', 't_privat'])->nullable();
            $table->integer('Id_Seguir')->nullable()->index('Id_Seguir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuari');
    }
};
