@extends('layouts.layout')

@section('title', 'Docentes')

@section('content')

     @include('alerts.info')
     <div class="card">
            <h4 class="card-header">
                    {{ $title }}
                    
            </h4>
            <div class="card-body">
    

    @if ($teachers->isNotEmpty())
    
    <table class="table table-hover">
        <thead class="thead-dark">
                <div align="right" >
                        <p>
                            <a href="{{ route('teachers.create') }}" class="btn btn-primary ">Nuevo</a>
                         </p>
                           
                 </div>
        <tr>
          
                <th scope="col">Identificación</th>
            <th scope="col">Nombres</th>
            
            
            <th scope="col">Télefono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Profesión</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
        <tr>
                <td>{{ $teacher->identification }}</td>
            <td>{{ $teacher->name }}</td>
          
            
            <td>{{ $teacher->phone }}</td>
            <td>{{ $teacher->direction }}</td>
            <td>{{ $teacher->profetion }}</td>
            <td>
                
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info" role="button">Ver</a>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning" role="button">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
             </td>
        </tr>
        @endforeach
        </tbody>
       
    </table>
        </div> 
    @else
        <p>No hay docentes registrados.</p>
    @endif
    
@endsection