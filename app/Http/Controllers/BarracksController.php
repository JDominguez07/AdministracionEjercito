<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Barrack;

class BarracksController extends Controller
{
    public function index()
    {
        return "Lista de cuarteles";
    }

    public function create()
    {
        return "Formulario para crear un cuartel";
    }

    public function store(Request $request)
    {
        return "Guardando el cuartel";
    }

    public function show($id)
    {
        return "Mostrando el cuartel con ID: $id";
    }

    public function edit($id)
    {
        return "Formulario para editar el cuartel con ID: $id";
    }

    public function update(Request $request, $id)
    {
        return "Actualizando el cuartel con ID: $id";
    }

    public function destroy($id)
    {
        return "Eliminando el cuartel con ID: $id";
    }
}
