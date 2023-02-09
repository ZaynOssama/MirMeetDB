<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Insignies;
use App\Models\Usuari;
use App\Models\Notificacio;
use App\Models\Retweet;
use App\Models\Follow;
use App\Models\Insignies_Usuaris;
use App\Models\Magrada;
use App\Models\Publicacio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipusUsuari>
 */
class TipusUsuariFactory extends Factory
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
        $usuari_id = Usuari::all()->pluck('id')->toArray();
        $impact_id = Retweet::all()->pluck('id')->toArray();
        $publicacio_id = Publicacio::all()->pluck('id')->toArray();
        $magrada_id = Magrada::all()->pluck('id')->toArray();
        $notificacio_id = Notificacio::all()->pluck('id')->toArray();


        return [
            'Tipus_Usuari' => 'client',
        ];
    }
}
