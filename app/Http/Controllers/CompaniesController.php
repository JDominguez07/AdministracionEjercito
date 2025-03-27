<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    // Mostrar el formulario
    public function create()
    {
        return view('companies.create');
    }

    // Guardar datos del formulario
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email',
        ]);

        // Guardar en la base de datos (si tienes un modelo Company)
        // Company::create($request->all());

        return redirect()->route('companies.create')->with('success', 'Empresa registrada con éxito.');
    }
}

