@extends('layouts.layout')
@section('title','Estudiantes')
@section('content')

     @include('alerts.info')
     <div class="card">
            <h4 class="card-header">
                    {{ $title }}
                    
            </h4>
    <div class="card-body">

    @if ($students->isNotEmpty())
    <table class="table table-hover text-center">
            <div align="right" >
                    <p>
                        <a href="{{ route('students.create') }}" class="btn btn-primary ">Nuevo</a>
                     </p>
                       
            </div>
        <thead class="thead-dark">
        <tr>
            
            <th scope="col">Identificación</th>
            <th scope="col">Nombres</th>
            <th scope="col">Télefono</th> 
            <th scope="col">Barrio</th>
            <th scope="col">Acudiente</th>
            <th scope="col">Operaciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>
                
                <td>{{ $student->identification }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->neighborhood }}</td>
                <td>{{ $student->hostess }}</td>
                <td>
                
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info " role="button" >Ver</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning" role="button">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
             </td>
        </tr>
        @endforeach
        </tbody>
       
    </table>
</div>
    @else
        <p>No hay asignaturas registradas.</p>
    @endif
    
@endsection