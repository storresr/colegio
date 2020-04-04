@extends('layouts.layout')


@section('title', "Crear asignaturas")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear asignaturas</h4>
        <div class="card-body">

                   
                
        <form method="POST" action="{{url('asignaturas')}}" >
                {{ csrf_field() }}

               
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} ">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="Matematicas " value="{{ old('name') }}">
                    {!! $errors->first('name','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

                <div class="form-group {{ $errors->has('daily_hours') ? 'has-error' : '' }}">
                    <label for="daily_hours">Horas diarias:</label>
                    <input type="number" class="form-control {{ $errors->has('daily_hours') ? 'is-invalid' : '' }} " name="daily_hours" id="daily_hours" placeholder="8 " value="{{ old('daily_hours') }}">
                    {!! $errors->first('daily_hours','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

                <div class="form-group {{ $errors->has('weekly_intensity') ? 'has-error' : '' }}">
                        <label for="weekly_intensity">Intensidad semanal:</label>
                        <input type="number" class="form-control {{ $errors->has('weekly_intensity') ? 'is-invalid' : '' }}" name="weekly_intensity" id="weekly_intensity" placeholder="8" value="{{ old('weekly_intensity') }}">
                        {!! $errors->first('weekly_intensity','<span class="help-block invalid-feedback">:message</span>')!!}
    
                </div>


                <button type="submit" class="btn btn-primary" id="btnStore">Crear asignatura</button>
                <a href="{{url('docente')}}" class="btn btn-link">Regresar al listado de asignatura</a>
            </form>
        </div>
    </div>
@endsection