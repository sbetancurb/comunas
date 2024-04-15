@extends('navbar')

@section('content')
<h1>Suroccidente</h1>
<div class="tabla">
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
                    @if ($oferente->getComuna() == $comuna)
                        <tr>
                            <td>{{$oferente->getComuna()}}</td>
                            <td>{{$oferente->getNombre()}}</td>
                            <td>{{$oferente->getObra()}}</td>
                            <td>{{$oferente->getValorContrato()}} COP</td>
                            <td>{{$oferente->getEscenarioAprobado()}}</td>
                        </tr>
                    @endif
            @endforeach
        @endforeach
    </table>
</div>
@endsection