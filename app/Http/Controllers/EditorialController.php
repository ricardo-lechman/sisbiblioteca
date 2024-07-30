<?php

namespace App\Http\Controllers;
use App\Models\Editorial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function index()
    {
        $editoriales = Editorial::all();
        return view('editoriales.index', compact('editoriales'));
    }

    public function create()
    {
        return view('editoriales.create');
    }

    public function store(Request $request)
    {
        $editorial = new Editorial();
        $editorial->NombreEditorial = $request->NombreEditorial;
        $editorial->Descripcion = $request->Descripcion;
        $editorial->save();

        return redirect()->route('editoriales.index');
    }

    public function show($id)
    {
        $editorial = Editorial::find($id);
        return view('editoriales.show', compact('editorial'));
    }

    public function edit($id)
    {
        $editorial = Editorial::find($id);
        return view('editoriales.edit', compact('editorial'));
    }

    public function update(Request $request, $id)
    {
        $editorial = Editorial::find($id);
        $editorial->NombreEditorial = $request->NombreEditorial;
        $editorial->Descripcion = $request->Descripcion;
        $editorial->save();

        return redirect()->route('editoriales.index');
    }

    public function destroy($id)
    {
        $editorial = Editorial::find($id);
        $editorial->delete();

        return redirect()->route('editoriales.index');
    }
}
