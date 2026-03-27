<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\PokedexService;


class PokemonController extends Controller
{   

    protected $pokedexService;

    public function __construct(PokedexService $pokedexService)
    {
        $this->pokedexService = $pokedexService;
    }

    public function index()
    {   
        $buscaPokemons = $this->pokedexService->buscaPokemons();

        $pokemonsTemTipos = $this->pokedexService->tiposPokemons($buscaPokemons);

        return view('welcome', ['characters' => $pokemonsTemTipos]);
    }
}
