@extends('navbar')

@section('content')
<div class="tabla">
    <div class="buscador">
        <form action="{{route('buscar')}}" method="GET">
            <div>
                <label>Busca oferentes por nombre, comuna o obra</label>
            </div>
            <input type="text" name="buscar" class="form-control buscador2">
            <input type="submit" value="enviar" class="btn btn-primary">
        </form>
    </div>
    <table>
        <tr>
            <th>Comuna</th>
            <th>Oferente</th>
            <th>Obra</th>
            <th>Valor Contrato</th>
            <th>Escenarios Aprobados</th>
        </tr>
            @foreach ($oferentes as $oferente)
                <tr>
                    <td>{{$oferente->comuna}}</td>
                    <td>{{$oferente->nombre}}</td>
                    <td>{{$oferente->obra}}</td>
                    <td>$ {{$oferente->valorContrato}} COP</td>
                    <td>{{$oferente->escenarioAprobado}}</td>
                </tr>
            @endforeach
    </table>
</div>
@endsection