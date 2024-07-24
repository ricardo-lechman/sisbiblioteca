<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        $autor = new Autor();
        $autor->NombreAutor = $request->NombreAutor;
        $autor->Descripcion = $request->Descripcion;
        $autor->save();

        return redirect()->route('autores.index');
    }

    public function show($id)
    {
        $autor = Autor::find($id);
        return view('autores.show', compact('autor'));
    }

    public function edit($id)
    {
        $autor = Autor::find($id);
        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::find($id);
        $autor->NombreAutor = $request->NombreAutor;
        $autor->Descripcion = $request->Descripcion;
        $autor->save();

        return redirect()->route('autores.index');
    }

    public function destroy($id)
    {
        $autor = Autor::find($id);
        $autor->delete();

        return redirect()->route('autores.index');
    }
}
