@extends('layouts.layout')

@section('title', "Estudiante {$student->id}")

@section('content')
    <h1>Estudiante #{{ $student->id }}</h1>

    <p>Identificación: {{ $student->identification }}</p>
    <p>Nombres: {{ $student->name }}{{ $student->last_name }}</p>
    <p>Télefono: {{ $student->phone }}</p>
    <p>Dirección: {{ $student->direction }}</p>
    <p>Barrio: {{ $student->neighborhood}}</p>
    <p>RH: {{ $student->rh }}</p>
    <p>EPS: {{ $student->eps}}</p>
    <p>Fecha Nacimeinto: {{ $student->date }}</p>
    <p>Acudiente: {{ $student->hostess->name}}{{ $student->hostess->lastname}}</p>
    <p>
        <a href="{{ route('students.index') }}">Regresar al listado de estudiantes</a>
    </p>
@endsection