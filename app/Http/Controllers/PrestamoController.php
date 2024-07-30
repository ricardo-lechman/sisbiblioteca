<?php

namespace App\Http\Controllers;
use App\Models\Prestamo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::all();
        return view('prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        return view('prestamos.create');
    }

    public function store(Request $request)
    {
        $prestamo = new Prestamo();
        $prestamo->Dni_Alumno = $request->Dni_Alumno;
        $prestamo->Cod_Libro = $request->Cod_Libro;
        $prestamo->Fecha_Prestamo = $request->Fecha_Prestamo;
        $prestamo->Fecha_Devolucion = $request->Fecha_Devolucion;
        $prestamo->save();

        return redirect()->route('prestamos.index');
    }

    public function show($id)
    {
        $prestamo = Prestamo::find($id);
        return view('prestamos.show', compact('prestamo'));
    }

    public function edit($id)
    {
        $prestamo = Prestamo::find($id);
        return view('prestamos.edit', compact('prestamo'));
    }

    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::find($id);
        $prestamo->Dni_Alumno = $request->Dni_Alumno;
        $prestamo->Cod_Libro = $request->Cod_Libro;
        $prestamo->Fecha_Prestamo = $request->Fecha_Prestamo;
        $prestamo->Fecha_Devolucion = $request->Fecha_Devolucion;
        $prestamo->save();

        return redirect()->route('prestamos.index');
    }

    public function destroy($id)
    {
        $prestamo = Prestamo::find($id);
        $prestamo->delete();

        return redirect()->route('prestamos.index');
    }
}