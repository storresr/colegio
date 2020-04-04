@extends('layouts.layout')

@section('title', "Registro Estudiante {$registerStudent->id}")

@section('content')
<h1>Registro Estudiante #{{ $registerStudent->id }}</h1>
<p>Identificación: {{ $registerStudent->student->identification }}</p>
<p>Nombre Estudiante: {{ $registerStudent->student['name'] .' ' }}{{ $registerStudent->student->last_name }}</p>
 {{-- <p>Asignatura: {{ $registerStudent->subject['name']}}</p> 
<p>Docente: {{ $registerStudent->teacher->name }}</p>   --}}


    <p>
        <a href="{{ route('registerstudents.index') }}">Regresar al listado de registro de estudiantes</a>
    </p>
@endsection