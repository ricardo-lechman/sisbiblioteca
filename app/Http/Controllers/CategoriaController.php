<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->NombreCategoria = $request->NombreCategoria;
        $categoria->Descripcion = $request->Descripcion;
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.show', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->NombreCategoria = $request->NombreCategoria;
        $categoria->Descripcion = $request->Descripcion;
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}