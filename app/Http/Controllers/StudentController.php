<?php

namespace Colegio\Http\Controllers;

use Colegio\Hostess;
use Colegio\Hour;
use Colegio\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Listado de estudiantes';
        $students = DB::table('v_student')->get();
        $student = Student::get();

        return view('students.index', compact('title', 'students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hours = Hour::all();
        $hostesses = Hostess::all();
        return view('students.create', compact('hours', 'hostesses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'identification' => 'required',
            'name'           => 'required',
            'last_name'      => 'required',
            'phone'          => 'required',
            'direction'      => 'required',
            'neighborhood'   => 'required',
            'rh'             => 'required',
            'eps'            => 'required',
            'date'           => 'required|date',

            'hostess_id'     => 'required',
        ]);
        Student::create([

            'identification' => $data['identification'],
            'name'           => $data['name'],
            'last_name'      => $data['last_name'],
            'phone'          => $data['phone'],
            'direction'      => $data['direction'],
            'neighborhood'   => $data['neighborhood'],
            'rh'             => $data['rh'],
            'eps'            => $data['eps'],
            'date'           => $data['date'],

            'hostess_id'     => $data['hostess_id'],

        ]);

        return redirect()->route('students.index')
            ->with('mensaje', 'El estudiante fue creado correctamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $hour = DB::table('v_hours')->where('id', $id)->first();
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $hostesses = Hostess::all();
        return view('students.edit', compact('student', 'hostesses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Student $student)
    {
        $data = request()->all();

        $student->update($data);

        return redirect()->route('students.index')
            ->with('mensaje', 'El estudiante ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('mensaje', 'El estudiante ha sido eliminado correcatmente');
    }
}
