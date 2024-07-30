<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $libro = new Libro();
        $libro->Titulo = $request->Titulo;
        $libro->Autor = $request->Autor;
        $libro->Editorial = $request->Editorial;
        $libro->Edicion = $request->Edicion;
        $libro->Idioma = $request->Idioma;
        $libro->Estado = $request->Estado;
        $libro->Descripcion = $request->Descripcion;
        $libro->CantPaginas = $request->CantPaginas;
        $libro->CopiasDisp = $request->CopiasDisp;
        $libro->save();

        return redirect()->route('libros.index');
    }

    public function show($id)
    {
        $libro = Libro::find($id);
        return view('libros.show', compact('libro'));
    }

    public function edit($id)
    {
        $libro = Libro::find($id);
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->Titulo = $request->Titulo;
        $libro->Autor = $request->Autor;
        $libro->Editorial = $request->Editorial;
        $libro->Edicion = $request->Edicion;
        $libro->Idioma = $request->Idioma;
        $libro->Estado = $request->Estado;
        $libro->Descripcion = $request->Descripcion;
        $libro->CantPaginas = $request->CantPaginas;
        $libro->CopiasDisp = $request->CopiasDisp;
        // Completar con una asignación o método válido para $libro
        $libro->save(); // Ejemplo de guardar los cambios
        return redirect()->route('libros.index');
    }

    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();

        return redirect()->route('libros.index');
    }
}





