@extends('layouts.layout')
@section('title', "Asignatura {$subject->id}")

@section('content')
<h1>Asignatura #{{ $subject->id }}</h1>

<p>Nombre: {{ $subject->name }}</p>
<p>Horas diarias: {{ $subject->daily_hours }}</p>
<p>Intensidad semanal: {{ $subject->weekly_intensity}}</p>
<p>
    <a href="{{ route('subjects.index') }}">Regresar al listado de asignaturas</a>
</p>
@endsection