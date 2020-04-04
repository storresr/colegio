@extends('layouts.layout')


@section('title', "Crear asignaturas")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear asignaturas</h4>
        <div class="card-body">

                   
                
        <form method="POST" action="{{url("horarios/{$hour->id}")}}" >
                {{ method_field('PUT') }}
                {{ csrf_field() }}

               
                <div class="form-group {{ $errors->has('teacher_id') ? 'has-error' : '' }} ">
                        <label for="teacher_id">Docente:</label>
                        <select  name="teacher_id" id="teacher_id" class="form-control {{ $errors->has('teacher_id') ? 'is-invalid' : '' }}"  value="{{ old('teacher_id',$hour->id) }}">
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



                <button type="submit" class="btn btn-primary" id="btnStore">Editar horarios</button>
                <a href="{{url('docente')}}" class="btn btn-link">Regresar al listado de asignatura</a>
            </form>
        </div>
    </div>
@endsection