@extends('layouts.layout')
@section('title', "Docente {$teacher->id}")

@section('content')
<h1>Docente #{{ $teacher->id }}</h1>

<p>Nombre: {{ $teacher->name }}</p>
<p>Apellidos: {{ $teacher->last_name }}</p>
<p>Identificación: {{ $teacher->identification }}</p>
<p>Télefono: {{ $teacher->phone }}</p>
<p>Dirección: {{ $teacher->direction }}</p>
<p>Profesión: {{ $teacher->profetion }}</p>


<p>
    <a href="{{ route('teachers.index') }}">Regresar al listado de docentes</a>
</p>
@endsection