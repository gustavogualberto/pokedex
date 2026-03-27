<?php 

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PokedexService{

    public function buscaPokemons()
    {
        $url = env('URL_API');

        $response = Http::get($url);

        return $response->json()['results'];
    }

    public function tiposPokemons(array $pokemons)
    {

        $characters = [];

        foreach ($pokemons as $pokemon) {

            $details = Http::get($pokemon['url'])->json();

            $types = [];
            foreach($details['types'] as $typeInfo){
                $types[] = $typeInfo['type']['name'];
            }

            $characters[] = [
                'name' => $pokemon['name'],
                'image' => $details['sprites']['other']['dream_world']['front_default'],
                'types' => $types
            ];

        
        }

        return $characters;        
    }

}