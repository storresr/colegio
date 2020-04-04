<?php

namespace Colegio\Http\Controllers;

use Illuminate\Http\Request;
use Colegio\Teacher;
use Illuminate\Support\Facades\DB;
class TeacherController extends Controller
{
    public function index()
    {
        $teachers = DB::table('v_teacher')->get();
        $title = "Listado de docentes";
        return view('teachers.index', compact('title', 'teachers'));
    }
    public function create()
    {
        return  view('teachers.create');
    }
    public function store()
    {
        $data = request()->validate([
            'name'           => 'required',
            'last_name'      => 'required',
            'identification' => 'required',
            'phone'          => 'required',
            'direction'      => 'required',
            'profetion'      => 'required',
        ]);
        Teacher::create([

            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'identification' => $data['identification'],
            'phone' => $data['phone'],
            'direction' => $data['direction'],
            'profetion' => $data['profetion'],


        ]);
        return redirect()->route('teachers.index')
            ->with('mensaje', 'El docente se ha sido creado correctamente');
    }
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Teacher $teacher)
    {

        $data = request()->all();

        $teacher->update($data);

        return redirect()->route('teachers.index')
            ->with('mensaje', 'El docente se ha sido modificado correctamente');
    }

    public function destroy(Teacher $teacher)
    {

        $teacher->delete();
        return redirect()->route('teachers.index')
            ->with('mensaje', 'El docente se ha sido eliminado correctamente');
    }
}
