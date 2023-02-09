<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Insignies;
use App\Models\TipusUsuari;
use App\Models\Notificacio;
use App\Models\Retweet;
use App\Models\Follow;
use App\Models\Insignies_Usuaris;
use App\Models\Magrada;
use App\Models\Publicacio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuari>
 */
class UsuariFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $follow_id = Follow::all()->pluck('id')->toArray();
        $insignies_id = Insignies::all()->pluck('id')->toArray();
        $insignies_user_id = Insignies_Usuaris::all()->pluck('id')->toArray();
        $tipus_usuari_id = TipusUsuari::all()->pluck('id')->toArray();
        $impact_id = Retweet::all()->pluck('id')->toArray();
        $publicacio_id = Publicacio::all()->pluck('id')->toArray();
        $magrada_id = Magrada::all()->pluck('id')->toArray();
        $notificacio_id = Notificacio::all()->pluck('id')->toArray();


        return [
            'Nom' => fake()->firstname(),
            'Cognom' => fake()->lastname(),
            'DNI' => fake()->numerify(),
            'Telefon' => fake()->phoneNumber(),
            'Data_Naixement' => fake()->date(),
            'Data_Inscripcio' => fake()->date(),
            'Nom_Usuari' => fake()->userName(),
            'Biografia' => fake()->password(),
            'Contrasenya' => bcrypt('r00t'),
            'Correu_Electronic' => fake()->unique()->safeEmail(),
            'tipus_usuari_id' => $this->faker->randomElement(TipusUsuari::all())['id'],
            // 'Id_Seguir' => $this->faker->randomElement($follow_id),
        ];
    }
}
