<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Treinador;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();
        return view('pokemon.index', compact('pokemon'));
    }

    public function create()
    {
        $treinador = Treinador::all();
        return view('pokemon.create', compact('treinador'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'tipo' => 'required|string',
        'pontos_de_poder' => 'required|integer',
        'treinador_id' => 'required|exists:treinadors,id',
    ]);

    Pokemon::create($validated);
    return redirect('pokemon')->with('success', 'Pokemon created successfully.');
}


    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemon.edit', compact('pokemon'));
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|string',
            'pontos_de_poder' => 'required|integer',
            'treinador_id' => 'required|exists:treinadors,id',
        ]);

        $pokemon->update($validated);
        return redirect('pokemon')->with('success', 'Pokemon updated successfully.');
    }

    public function destroy($id)
    {
        // Encontre o Pokémon e apague
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemon')->with('success', 'Pokemon deleted successfully.');
    }
}
