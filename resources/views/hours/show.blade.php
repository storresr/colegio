@extends('layouts.layout')

@section('title', "Horario {$hour->id}")

@section('content')
    <h1>Horario #{{ $hour->id }}</h1>

    <p>Nombre Docente: {{ $hour->teacher->name .' '  }}{{ $hour->teacher->last_name }}</p>
    <p>Asignatura: {{ $hour->subject->name }}</p>
    <p>Horas diarias: {{ $hour->subject->daily_hours }}</p>
    <p>Intensidad semanal: {{ $hour->subject->weekly_intensity }}</p>
    <p>
        <a href="{{ route('hours.index') }}">Regresar al listado de horario</a>
    </p>
@endsection