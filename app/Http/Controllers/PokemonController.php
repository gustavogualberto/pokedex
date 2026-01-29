<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function index()
    {   
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/?limit=18&offset=0');
        $results = $response->json()['results'];

        $characters = [];

        
        foreach ($results as $pokemon) {
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

        // dd($details);
        
        return view('welcome', compact ('characters'));
    }
}
