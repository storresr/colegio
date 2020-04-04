<?php

namespace Colegio\Http\Controllers;

use Illuminate\Http\Request;
use Colegio\Teacher;
use Colegio\Subject;
use Colegio\Hour;
use Illuminate\Support\Facades\DB;

class HoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Listado de horarios';
        $hours = DB::table('v_hours')->get();
        return view('hours.index', compact('title', 'hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = DB::table('v_teacher')->get();
        $subjects = DB::table('subjects')->get();
        return view('hours.create', compact('subjects','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([

            'subject_id' => 'required',
            'teacher_id' => 'required',

        ]);
        Hour::create([

            'subject_id'  => $data['subject_id'],
            'teacher_id'  => $data['teacher_id'],

        ]);

        return redirect()->route('hours.index')
            ->with('mensaje', 'El horario fue creado correctamente');
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
        $hour = Hour::find($id);
        return view('hours.show', compact('hour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hour $hour)
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();
        return view('hours.edit', compact('hour', 'teachers', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Hour $hour)
    {
        $data = request()->all();

        $hour->update($data);

        return redirect()->route('hours.index')
            ->with('mensaje', 'El horario ha sido actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hour $hour)
    {
        $hour->delete();

        return redirect()->route('hours.index')
            ->with('mensaje', 'El horario ha sido eliminado correcatmente');
    }
}
