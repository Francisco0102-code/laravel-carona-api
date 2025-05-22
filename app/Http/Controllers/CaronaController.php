<?php

namespace App\Http\Controllers;

use App\Models\Carona;
use Illuminate\Http\Request;

class CaronaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'motorista' => 'required|string|max:255',
            'origem' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
            'data_hora' => 'required|date',
            'vagas' => 'required|integer|min:1',
        ]);

        // Adicionando o user_id manualmente
        $validated['user_id'] = $request->user()->id;

        $carona = Carona::create($validated);

        return response()->json([
            'message' => 'Carona cadastrada com sucesso!',
            'carona' => $carona
        ], 201);
    }
}