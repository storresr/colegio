@extends('layouts.layout')


@section('title', "Crear horarios")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear horarios</h4>
        <div class="card-body">

                   
                
        <form method="POST" action="{{url('horarios')}}" >
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('teacher_id') ? 'has-error' : '' }} ">
                    <label for="teacher_id">Docente:</label>
                    <select  name="teacher_id" id="teacher_id" class="form-control {{ $errors->has('teacher_id') ? 'is-invalid' : '' }}"  value="{{ old('teacher_id') }}">
                             @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{ $teacher->name }}</option>
                             @endforeach
                    </select>
                    {!! $errors->first('teacher_id','<span class="help-block invalid-feedback">:message</span>')!!}
            
                </div>
        

                <div class="form-group {{ $errors->has('subject_id') ? 'has-error' : '' }} ">
                    <label for="subject_id">Materia:</label>
                    <select  name="subject_id" id="subject_id" class="form-control {{ $errors->has('subject_id') ? 'is-invalid' : '' }}" value="{{ old('subject_id') }}">
                        @foreach($subjects as $subject)
                             <option value="{{$subject->id}}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('subject_id','<span class="help-block invalid-feedback">:message</span>')!!}
            
                </div>

               
                <button type="submit" class="btn btn-primary" id="btnStore">Crear horario</button>
                <a href="{{url('horarios')}}" class="btn btn-link">Regresar al listado de horarios</a>
                  
        </form>
    </div>
@endsection