@extends('navbar')

@section('content')
@foreach ($viewData['zonas'] as $zona)
<div class="tabla">
    <h1>{{$zona}}</h1>
    <table>
        <tr>
            <th>Comuna</th>
            <th>Oferente</th>
            <th>Obra</th>
            <th>Valor Contrato</th>
            <th>Escenarios Aprobados</th>
        </tr>
        @foreach ($viewData['comunas'] as $comuna)
            @foreach ($viewData['oferentes'] as $oferente)
                @if ($comuna->getLocation() == $zona)
                    @if ($oferente->getComuna() == $comuna->getName())
                        <tr>
                            <td>{{$oferente->getComuna()}}</td>
                            <td>{{$oferente->getNombre()}}</td>
                            <td>{{$oferente->getObra()}}</td>
                            <td>{{$oferente->getValorContrato()}} COP</td>
                            <td>{{$oferente->getEscenarioAprobado()}}</td>
                        </tr>
                    @endif
                @endif
            @endforeach
        @endforeach
    </table>
    <br>
</div>
@endforeach
@endsection