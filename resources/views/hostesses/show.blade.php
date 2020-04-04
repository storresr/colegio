@extends('layouts.layout')

@section('title', "Acudiente {$hostess->id}")

@section('content')
    <h1>Acudiente #{{ $hostess->id }}</h1>

    <p>Nombre: {{ $hostess->name }}</p>
    <p>Apellidos: {{ $hostess->last_name }}</p>
    <p>Identificación: {{ $hostess->identification}}</p>
    <p>Télefono: {{ $hostess->phone }}</p>
    <p>Dirección: {{ $hostess->direction }}</p>
    <p>Parentesco: {{ $hostess->relationship }}</p>

    <p>
        <a href="{{ route('hostesses.index') }}">Regresar al listado de acudientes</a>
    </p>
@endsection