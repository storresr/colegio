<?php

namespace Colegio\Http\Controllers;

use Illuminate\Http\Request;
use Colegio\Subject;
use Hamcrest\Text\SubstringMatcher;
use Colegio\Teacher;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subjects = Subject::all();
        $title = 'Listado de asignaturas';

        return view('subjects.index', compact('title', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('subjects.create');
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
            'name'             => 'required',
            'daily_hours'      => 'required',
            'weekly_intensity' => 'required',

        ]);
        Subject::create([

            'name'             => $data['name'],
            'daily_hours'      => $data['daily_hours'],
            'weekly_intensity' => $data['weekly_intensity'],


        ]);

        return redirect()->route('subjects.index')
            ->with('mensaje', 'La asignatura fue creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Subject $subject)
    {
        $data = request()->all();

        $subject->update($data);

        return redirect()->route('subjects.index')
            ->with('mensaje', 'La asignatura ha sido actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subjects.index')
            ->with('mensaje', 'La asignatura ha sido eliminada correcatmente');
    }
}
