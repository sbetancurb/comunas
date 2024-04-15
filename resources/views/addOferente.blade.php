@extends('navbar')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('guardar') }}" enctype="multipart/form-data">
        @csrf
        <div class="fields">
            <div class="input-field">
                <label>Ingrese la comuna en la que va a trabajar</label>
                <select name="comuna">
                    <option selected>Selecciona</option>
                    @foreach ($viewData['comunas'] as $comuna)
                        <option value="{{ $comuna->getName() }}">{{ $comuna->getName() }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-field">
                <label >Ingrese el nombre de la persona o la empresa</label>
                <input type="text" class="form-control mb-2"  name="nombre" />
            </div>
            <div class="input-field">
                <label>Ingrese la obra a la que pertenece el oferente</label>
                <select name="obra" class="form-control mb-2">
                    <option selected>Selecciona</option>
                    <option value="Civiles">Civiles</option>
                    <option value="Pintura">Pintura</option>
                    <option value="Mallas o cerramientos">Mallas o cerramientos</option>
                    <option value="Eléctricas o iluminación">Eléctricas o iluminación</option>
                    <option value="Arenillas">Arenillas</option>
                    <option value="Sintéticas">Sintéticas</option>
                    <option value="Acondicionamiento mobiliarío">Acondicionamiento mobiliarío</option>
                    <option value="Señalizaciones">Señalizaciones</option>
                    <option value="Uniformes o dotaciones">Uniformes o dotaciones</option>
                </select>
            </div>
            <div class="input-field">
                <label>Ingrese el valor por el que va a contratar al oferente</label>
                <input type="number" class="form-control mb-2" placeholder="{{__('')}}" name="valorContrato" />
            </div>
            <div class="input-field">
                <label>Ingrese el escenario aprobado</label>
                <input type="text" class="form-control mb-2"  name="escenarioAprobado" />
            </div>
            <input type="submit" class="btn btn-primary button" value="{{__('Send')}}" />
        </div>
    </form>
</div>
@endsection