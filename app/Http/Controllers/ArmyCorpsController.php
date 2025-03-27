<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArmyCorps; // Asegúrate de importar el modelo

class ArmyCorpsController extends Controller
{
    public function index()
    {
        $armyCorps = ArmyCorps::all(); // Obtiene todos los registros de la tabla
        return view('army_corps.index', compact('armyCorps')); // Retorna la vista con los datos
    }

    public function form()
    {
        return view('army_corps.form.store');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        ArmyCorps::create($request->all());

        return redirect()->route('army_corps.create')->with('success', 'Cuerpo de Ejército guardado.');
    }
}
