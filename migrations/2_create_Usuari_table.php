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
        Schema::create('usuaris', function (Blueprint $table) {
            $table->id();
            $table->string('Nom', 50)->nullable();
            $table->string('Cognom', 50)->nullable();
            $table->string('DNI', 50)->nullable();
            $table->string('Telefon', 50)->nullable();
            $table->date('Data_Naixement')->nullable();
            $table->date('Data_Inscripcio')->nullable();
            $table->string('Nom_Usuari', 50)->unique('Nom_Usuari');
            $table->string('Biografia', 50)->nullable();
            $table->string('Contrasenya', 255);
            $table->string('Correu_Electronic', 50)->unique('Correu_Electronic');
            $table->boolean('Estat_Verificacio')->nullable();
            $table->boolean('Bloquejat')->nullable()->default(false);
            $table->boolean('Validat')->nullable()->default(false);
            $table->foreignId('tipus_usuari_id')
            ->references('id')
            ->on('tipus_usuaris')
            ->onDelete('cascade')
            ->constrained();
            $table->string('Perfil_image', 255)->nullable()->default('https://image.isu.pub/131113230020-a8648deb5fd9c8eaa505bb41f9d2d41a/jpg/page_1.jpg');
            $table->enum('Tipus_Perfil', ['t_public', 't_privat'])->nullable()->default('t_public');
            // $table->foreign('follow_id')
            // ->references('id')
            // ->on('follows')
            // ->onDelete('cascade')
            // ->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuaris');
    }
};
