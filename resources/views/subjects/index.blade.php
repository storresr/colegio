@extends('layouts.layout')

@section('title', 'Asignaturas')

@section('content')

     @include('alerts.info')
     <div class="card">
            <h4 class="card-header">
                    {{ $title }}
                    
            </h4>
            <div class="card-body">

    @if ($subjects->isNotEmpty())
    <table class="table table-hover text-center">
        <thead class="thead-dark">
                <div align="right" >
                        <p>
                            <a href="{{ route('subjects.create') }}" class="btn btn-primary ">Nuevo</a>
                         </p>
                           
                </div>
        <tr>
           
            
            <th scope="col">Nombre</th>
            <th scope="col">Horas diarias</th>
            <th scope="col">Intensidad semanal</th>
         
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
        <tr>
           
            <td>{{ $subject->name }}</td>
            <td>{{ $subject->daily_hours }}</td>
            <td>{{ $subject->weekly_intensity }}</td>
            
            <td>
                
                    <form action="{{ route('subjects.destroy', $subject) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('subjects.show', $subject) }}" class="btn btn-info" role="button">Ver</a>
                            <a href="{{ route('subjects.edit', $subject) }}" class="btn btn-warning" role="button">Editar</a>
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