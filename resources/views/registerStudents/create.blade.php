@extends('layouts.layout')


@section('title', "Registrar estudiantes")

@section('content')
    <div class="card">
        <h4 class="card-header">Registrar estudiantes</h4>
        <div class="card-body">

                   
                
        <form method="POST" action="{{url('registrarestudiantes')}}" >
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('student_id') ? 'has-error' : '' }} ">
                    <label for="student_id">Estudiante:</label>
                    <select  name="student_id" id="student_id" class="form-control {{ $errors->has('student_id') ? 'is-invalid' : '' }}"  value="{{ old('student_id') }}">
                             @foreach($students as $student)
                                    <option value="{{$student->id}}">{{ $student->name }}</option>
                             @endforeach
                    </select>
                    {!! $errors->first('student_id','<span class="help-block invalid-feedback">:message</span>')!!}
            
                </div>
        

                <div class="form-group {{ $errors->has('hour_id') ? 'has-error' : '' }} ">
                    <label for="hour_id">Materia:</label>
                    <select  name="hour_id" id="hour_id" class="form-control {{ $errors->has('hour_id') ? 'is-invalid' : '' }}" value="{{ old('hour_id') }}">
                        @foreach($hours as $hour)
                             <option value="{{$hour->id}}">{{ $hour->teacher_name }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('hour_id','<span class="help-block invalid-feedback">:message</span>')!!}
            
                </div>

               
                <button type="submit" class="btn btn-primary" id="btnStore">Registrar estudiante</button>
                <a href="{{url('estudiantes')}}" class="btn btn-link">Regresar al listado de registro de estudiante</a>
                  
        </form>
    </div>
@endsection