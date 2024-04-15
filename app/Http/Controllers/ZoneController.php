<?php

namespace App\Http\Controllers;

use App\Models\Oferente;
use App\Models\Comuna;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function inicio(): View
    {
        $viewData = [];
        $viewData['zonas']=['Nororiental','Noroccidental','Centro Oriental','Centro Occidental','Suroriente','Suroccidente'];
        $viewData['comunas']=Comuna::all();
        $viewData['oferentes']=Oferente::all();

        return view('inicio')->with('viewData',$viewData);
    }
    public function zona1(): View
    {
        $viewData = [];
        $viewData['comunas']=['Popular','Manrique','Santa Cruz','Aranjuez'];
        $viewData['oferentes']=Oferente::all();

        return view('zona1')->with('viewData',$viewData);
    }
    public function zona2(): View
    {
        $viewData = [];
        $viewData['comunas']=['Castilla','Doce de Octubre','Robledo'];
        $viewData['oferentes']=Oferente::all();

        return view('zona2')->with('viewData',$viewData);
    }
    public function zona3(): View
    {
        $viewData = [];
        $viewData['comunas']=['Villa Hermosa','Buenos Aires','Candelaria'];
        $viewData['oferentes']=Oferente::all();

        return view('zona3')->with('viewData',$viewData);
    }
    public function zona4(): View
    {
        $viewData = [];
        $viewData['comunas']=['Laureles(Comuna Estadio)','La América','San Javier'];
        $viewData['oferentes']=Oferente::all();

        return view('zona4')->with('viewData',$viewData);
    }
    public function zona5(): View
    {
        $viewData = [];
        $viewData['comunas']=['El Poblado'];
        $viewData['oferentes']=Oferente::all();

        return view('zona5')->with('viewData',$viewData);
    }
    public function zona6(): View
    {
        $viewData = [];
        $viewData['comunas']=['Guayabal','Belén'];
        $viewData['oferentes']=Oferente::all();

        return view('zona6')->with('viewData',$viewData);
    }
}
