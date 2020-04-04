@extends('layouts.layout')

@section('title', 'Acudientes')

@section('content')

     @include('alerts.info')
     <div class="card">
            <h4 class="card-header">
                    {{ $title }}
                    
            </h4>
            <div class="card-body">

    @if ($hostesses->isNotEmpty())
    <table class="table table-hover text-center">
            <div align="right" >
                    <p>
                        <a href="{{ route('hostesses.create') }}" class="btn btn-primary ">Nuevo</a>
                     </p>
                       
                </div>
        <thead class="thead-dark">
        <tr>
            
                <th scope="col">Identificación</th>
            <th scope="col">Nombres</th>
            
            
            <th scope="col">Télefono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Parentesco</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($hostesses as $hostess)
        <tr>
                <td>{{ $hostess->identification }}</td>
            <td>{{ $hostess->name }}</td>
            <td>{{ $hostess->phone }}</td>
            <td>{{ $hostess->direction }}</td>
            <td>{{ $hostess->relationship }}</td>
            <td>
                
                    <form action="{{ route('hostesses.destroy', $hostess->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('hostesses.show', $hostess->id) }}" class="btn btn-info"   role="button">Ver</a>
                            <a href="{{ route('hostesses.edit', $hostess->id) }}" class="btn btn-warning" role="button">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
             </td>
        </tr>
        @endforeach
        </tbody>
        
    </table>
 </div>  
    @else
        <p>No hay acudientes registrados.</p>
    @endif
    
@endsection