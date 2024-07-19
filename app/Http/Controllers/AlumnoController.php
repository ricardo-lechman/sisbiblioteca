<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->Dni_Alumno = $request->Dni_Alumno;
        $alumno->User = $request->User;
        $alumno->Password = $request->Password;
        $alumno->Direccion = $request->Direccion;
        $alumno->Telefono = $request->Telefono;
        $alumno->Email = $request->Email;
        $alumno->save();

        return redirect()->route('alumnos.index');
    }

    public function show($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.show', compact('alumno'));
    }

    public function edit($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.edit', compact('alumno'));
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);
        $alumno->Dni_Alumno = $request->Dni_Alumno;
        $alumno->User = $request->User;
        $alumno->Password = $request->Password;
        $alumno->Direccion = $request->Direccion;
        $alumno->Telefono = $request->Telefono;
        $alumno->Email = $request->Email;
        $alumno->save();

        return redirect()->route('alumnos.index');
    }

    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();

        return redirect()->route('alumnos.index');
    }
}