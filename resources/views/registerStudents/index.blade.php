@extends('layouts.layout')
@section('title','Registro Estudiantes')
@section('content')

     @include('alerts.info')
     <div class="card">
            <h4 class="card-header">
                    {{ $title }}
                    
            </h4>
            <div class="card-body">

    @if ($registerStudents->isNotEmpty())
    <table class="table table-hover text-center">
            <div align="right" >
                    <p>
                        <a href="{{ route('registerstudents.create') }}" class="btn btn-primary ">Nuevo</a>
                     </p>
                       
            </div>
        <thead class="thead-dark">
        <tr>
                        
            <th scope="col">Identificación</th>
            <th scope="col">Nombre Estudiante</th>
            <th scope="col">Docente - Asignatura</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($registerStudents as $registerStudent)
        <tr>
           
            <td>{{ $registerStudent->identification }}</td>
            <td>{{ $registerStudent->name }}</td>
            
            <td>{{ $registerStudent->teacher }}</td>
            
            
            <td>
                
                    <form action="{{ route('registerstudents.destroy', $registerStudent->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('registerstudents.show', $registerStudent->id) }}" class="btn btn-info " role="button" >Ver</a>
                            <a href="{{ route('registerstudents.edit', $registerStudent->id) }}" class="btn btn-warning" role="button">Editar</a>
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