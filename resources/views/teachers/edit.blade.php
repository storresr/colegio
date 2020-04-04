@extends('layouts.layout')


@section('title', "Editar docentes")

@section('content')
    <div class="card">
        <h4 class="card-header">Editar docentes</h4>
        <div class="card-body">

                   
                
        <form method="POST" action="{{url("docentes/{$teacher->id}")}}" >
                  {{ method_field('PUT') }}
                {{ csrf_field() }}

                

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} ">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="Steven " value="{{ old('name',$teacher->name) }}">
                    {!! $errors->first('name','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                    <label for="last_name">Apellidos:</label>
                    <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }} " name="last_name" id="last_name" placeholder="Torres Rivera " value="{{ old('last_name',$teacher->last_name) }}">
                    {!! $errors->first('last_name','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

                <div class="form-group {{ $errors->has('identification') ? 'has-error' : '' }}">
                        <label for="identification">Identificación:</label>
                        <input type="number" class="form-control {{ $errors->has('identification') ? 'is-invalid' : '' }}" name="identification" id="identification" placeholder="1053850195" value="{{ old('identification',$teacher->identification) }}">
                        {!! $errors->first('identification','<span class="help-block invalid-feedback">:message</span>')!!}
    
                </div>

                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }} ">
                    <label for="phone">Télefono:</label>
                    <input type="number" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" id="phone" placeholder="8802826" value="{{ old('phone',$teacher->phone) }}">
                    {!! $errors->first('phone','<span class="help-block invalid-feedback">:message</span>')!!}

                  
                </div>

                <div class="form-group {{ $errors->has('direction') ? 'has-error' : '' }}">
                    <label for="direction">Dirección:</label>
                    <input type="text" class="form-control {{ $errors->has('direction') ? 'is-invalid' : '' }}" name="direction" id="direction" placeholder="calle 17 # 31-60" value="{{ old('direction',$teacher->direction) }}">
                    {!! $errors->first('direction','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

                <div class="form-group {{ $errors->has('profetion') ? 'has-error' : '' }}">
                        <label for="profetion">Profesión:</label>
                        <input type="text" class="form-control {{ $errors->has('profetion') ? 'is-invalid' : '' }}" name="profetion" id="profetion" placeholder="Ingeniero de Sistemas" value="{{ old('profetion',$teacher->profetion) }}">
                        {!! $errors->first('profetion','<span class="help-block invalid-feedback">:message</span>')!!}
    
                </div>

               

                <button type="submit" class="btn btn-primary" id="btnStore">Editar docente</button>
                <a href="{{url('docentes')}}" class="btn btn-link">Regresar al listado de docentes</a>
            </form>
        </div>
    </div>
@endsection