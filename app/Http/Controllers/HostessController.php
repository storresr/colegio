<?php

namespace Colegio\Http\Controllers;

use Illuminate\Http\Request;
use Colegio\Hostess;
use Illuminate\Support\Facades\DB;
use Colegio\Exports\HostessesExport;
use Maatwebsite\Excel\Facades\Excel;


class HostessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostesses = DB::table('v_hostess')->get();
        $title = 'Listado de acudientes';
        return view('hostesses.index', compact('title', 'hostesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hostesses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // $data = request()->all();
        $data = request()->validate([
            'name'           => 'required',
            'last_name'      => 'required',
            'identification' => 'required',
            'phone'          => 'required',
            'direction'      => 'required',
            'relationship'   => 'required',
        ]);
        Hostess::create([


            'name'           => $data['name'],
            'last_name'      => $data['last_name'],
            'identification' => $data['identification'],
            'phone'          => $data['phone'],
            'direction'      => $data['direction'],
            'relationship'   => $data['relationship'],

        ]);

        return redirect()->route('hostesses.index')
            ->with('mensaje', 'El acudiente se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hostess $hostess)
    {
        return view('hostesses.show', compact('hostess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hostess $hostess)
    {
        return view('hostesses.edit')
            ->with('hostess', $hostess);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Hostess $hostess)
    {
        $data = request()->all();

        $hostess->update($data);

        return redirect()->route('hostesses.index')
            ->with('mensaje', 'El acudiente se ha sido modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hostess $hostess)
    {
        $hostess->delete();

        return redirect()->route('hostesses.index')
            ->with('mensaje', 'El acudiente se ha sido eliminado correctamente');
    }

    public function export(HostessesExport $hostessesExport)
    {
        return $hostessesExport->download('hostess.csv');
    }
}
