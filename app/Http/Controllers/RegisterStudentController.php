<?php

namespace Colegio\Http\Controllers;

use Colegio\Hour;
use Colegio\RegisterStudent;
use Colegio\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegisterStudentController extends Controller
{
    public function index(){
        $title = 'Listado de Registro de estudiantes';
        $registerStudents = DB::table('v_registerstudent')->get();
        return view('registerstudents.index',compact('title','registerStudents'));
    }

    public function create(){
        $students = DB::table('v_student')->get();
        $hours = DB::table('v_hours')->get();
        return view ('registerStudents.create',compact('students','hours'));
    }

    public function store(){

        $data = request()->all();

        RegisterStudent::create([

            'student_id' => $data['student_id'],
            'hour_id'    => $data['hour_id'],

        ]);

        return redirect()->route('registerstudents.index')
            ->with('mensaje', 'El registro del estudiante fue creado correctamente');
    }

    public function show($id){

        $registerStudent = RegisterStudent::find($id);
        return view('registerstudents.show', compact('registerStudent'));
    }

    public function edit(){

        //
    }

    public function update(){

        //
    }

    public function destroy(RegisterStudent $registerstudent){

        $registerstudent->delete();

        return redirect()->route('registerstudents.index')
            ->with('mensaje', 'El registro de la materia ha sido cancelada');
    }

}
