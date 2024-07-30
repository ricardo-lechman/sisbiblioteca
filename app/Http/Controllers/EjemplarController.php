<?php

namespace App\Http\Controllers;
use App\Models\Ejemplar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EjemplarController extends Controller
{
    public function index()
    {
        $ejemplares = Ejemplar::all();
        return view('ejemplares.index', compact('ejemplares'));
    }

    public function create()
    {
        return view('ejemplares.create');
    }

    public function store(Request $request)
    {
        $ejemplar = new Ejemplar();
        $ejemplar->Numero_Ejemplar = $request->Numero_Ejemplar;
        $ejemplar->Estado_Ejemplar = $request->Estado_Ejemplar;
        $ejemplar->save();

        return redirect()->route('ejemplares.index');
    }

    public function show($id)
    {
        $ejemplar = Ejemplar::find($id);
        return view('ejemplares.show', compact('ejemplar'));
    }

    public function edit($id)
    {
        $ejemplar = Ejemplar::find($id);
        return view('ejemplares.edit', compact('ejemplar'));
    }

    public function update(Request $request, $id)
    {
        $ejemplar = Ejemplar::find($id);
        $ejemplar->Numero_Ejemplar = $request->Numero_Ejemplar;
        $ejemplar->Estado_Ejemplar = $request->Estado_Ejemplar;
        $ejemplar->save();

        return redirect()->route('ejemplares.index');
    }

    public function destroy($id)
    {
        $ejemplar = Ejemplar::find($id);
        $ejemplar->delete();

        return redirect()->route('ejemplares.index');
    }
}
EstadoController
php
Copiar código
namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();
        return view('estados.index', compact('estados'));
    }

    public function create()
    {
        return view('estados.create');
    }

    public function store(Request $request)
    {
        $estado = new Estado();
        $estado->Disponibilidad = $request->Disponibilidad;
        $estado->save();

        return redirect()->route('estados.index');
    }

    public function show($id)
    {
        $estado = Estado::find($id);
        return view('estados.show', compact('estado'));
    }

    public function edit($id)
    {
        $estado = Estado::find($id);
        return view('estados.edit', compact('estado'));
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::find($id);
        $estado->Disponibilidad = $request->Disponibilidad;
        $estado->save();

        return redirect()->route('estados.index');
    }

    public function destroy($id)
    {
        $estado = Estado::find($id);
        $estado->delete();

        return redirect()->route('estados.index');
    }
}