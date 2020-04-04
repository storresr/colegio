@extends('layouts.layout')


@section('title', "Crear estudiantes")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear estudiantes</h4>
        <div class="card-body">

                   
                
        <form method="POST" action="{{url('estudiantes')}}" >
                {{ csrf_field() }}
             
                <div class="form-group {{ $errors->has('identification') ? 'has-error' : '' }}">
                    <label for="identification">Identificación:</label>
                    <input type="number" class="form-control {{ $errors->has('identification') ? 'is-invalid' : '' }}" name="identification" id="identification" placeholder="1053850195" value="{{ old('identification') }}">
                    {!! $errors->first('identification','<span class="help-block invalid-feedback">:message</span>')!!}

            </div>

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} ">
                   
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="Steven " value="{{ old('name') }}">
                    {!! $errors->first('name','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

                

                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                    <label for="last_name">Apellidos:</label>
                    <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }} " name="last_name" id="last_name" placeholder="Torres Rivera " value="{{ old('last_name') }}">
                    {!! $errors->first('last_name','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                    <label for="phone">Télefono:</label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }} " name="phone" id="phone" placeholder="8802826 " value="{{ old('phone') }}">
                    {!! $errors->first('phone','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

             

                <div class="form-group {{ $errors->has('direction') ? 'has-error' : '' }}">
                    <label for="direction">Dirección:</label>
                    <input type="text" class="form-control {{ $errors->has('direction') ? 'is-invalid' : '' }}" name="direction" id="direction" placeholder="calle 17 # 31-60" value="{{ old('direction') }}">
                    {!! $errors->first('direction','<span class="help-block invalid-feedback">:message</span>')!!}

                </div>

                <div class="form-group {{ $errors->has('neighborhood') ? 'has-error' : '' }}">
                        <label for="neighborhood">Barrio:</label>
                        <input type="text" class="form-control {{ $errors->has('neighborhood') ? 'is-invalid' : '' }}" name="neighborhood" id="neighborhood" placeholder="La Sultana" value="{{ old('neighborhood') }}">
                        {!! $errors->first('neighborhood','<span class="help-block invalid-feedback">:message</span>')!!}
    
                </div>
                 

                <div class="form-group {{ $errors->has('rh') ? 'has-error' : '' }} ">
                    <label for="rh">RH:</label>
                    <input type="text" class="form-control {{ $errors->has('rh') ? 'is-invalid' : '' }}" name="rh" id="rh" placeholder="O+" value="{{ old('rh') }}">
                    {!! $errors->first('rh','<span class="help-block invalid-feedback">:message</span>')!!}

                  
                </div>

                 

                <div class="form-group {{ $errors->has('eps') ? 'has-error' : '' }} ">
                    <label for="eps">EPS:</label>
                    <input type="text" class="form-control {{ $errors->has('eps') ? 'is-invalid' : '' }}" name="eps" id="eps" placeholder="Salud Total" value="{{ old('eps') }}">
                    {!! $errors->first('eps','<span class="help-block invalid-feedback">:message</span>')!!}

                  
                </div>

                 

                <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }} ">
                    <label for="date">Fecha Nacimiento:</label>
                    <input type="date" class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" name="date" id="date" placeholder="24-05-1996" value="{{ old('date') }}">
                    {!! $errors->first('date','<span class="help-block invalid-feedback">:message</span>')!!}

                  
                </div>


               
                <button type="submit" class="btn btn-primary" id="btnStore">Crear estudiantes</button>
                <a href="{{url('horarios')}}" class="btn btn-link">Regresar al listado de estudiantes</a>
                  
        </form>
    </div>
@endsection