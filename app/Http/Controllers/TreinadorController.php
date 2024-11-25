<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treinador;

class TreinadorController extends Controller
{
    public function index()
    {
        
        $treinador = Treinador::all();
        return view('treinador.index', compact('treinador'));
    }

    public function create()
    {
        return view('treinador.create');
    }

    public function store(Request $request)
    {
        Treinador::create($request->all());
        return redirect('treinadors')->with('success', 'Treinador criado com sucesso.');
    }

    public function edit($id)
    {
        $treinador = Treinador::findOrFail($id);
        return view('treinador.edit', compact('treinador'));
    }

    public function update(Request $request, $id)
    {
        $treinador = Treinador::findOrFail($id);
        $treinador->update($request->all());
        return redirect('treinadors')->with('success', 'Treinador atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $treinador = Treinador::findOrFail($id);
        $treinador->delete();
        return redirect('treinadors')->with('success', 'Treinador deletado com sucesso.');
    }
}
