@extends('layouts.layout')
@section('title','Horarios')
@section('content')

     @include('alerts.info')
     <div class="card">
            <h4 class="card-header">
                    {{ $title }}
                    
            </h4>
            <div class="card-body">

    @if ($hours->isNotEmpty())
    <table class="table table-hover text-center">
            <div align="right" >
                    <p>
                        <a href="{{ route('hours.create') }}" class="btn btn-primary ">Nuevo</a>
                     </p>
                       
            </div>
        <thead class="thead-dark">
        <tr>
           
            
            <th scope="col">Docente - Asignatura</th>
            
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($hours as $hour)
        <tr>
            
            <td>{{ $hour->teacher_name }}</td>

            <td>
                
                    <form action="{{ route('hours.destroy', $hour->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('hours.show', $hour->id) }}" class="btn btn-info " role="button" >Ver</a>
                            <a href="{{ route('hours.edit', $hour->id) }}" class="btn btn-warning" role="button">Editar</a>
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