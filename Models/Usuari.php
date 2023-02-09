<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuari extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Nom',
        'Cognom',
        'DNI',
        'Telefon',
        'Data_Naixement',
        'Data_Inscripcio',
        'Nom_Usuari',
        'Biografia',
        'Contrasenya',
        'Correu_Electronic',
        'Estat_Verificacio',
        'Bloquejat',
        'Validat',
        'tipus_usuari_id',
        'Perfil_image',
        'Tipus_Perfil',
        'Id_Seguir',
    ];
}
