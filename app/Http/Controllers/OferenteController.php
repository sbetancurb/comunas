<?php

namespace App\Http\Controllers;

use App\Models\Oferente;
use App\Models\Comuna;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OferenteController extends Controller
{
    public function crear(): view
    {   
        $viewData = [];
        $viewData['comunas'] = Comuna::all();
        return view('addOferente')->with('viewData', $viewData);
    }

    public function guardar(Request $request)
    {
        Oferente::validate($request);
        Oferente::crearOferente($request);
        return back();
    }

    public function buscar(Request $request): view
    {
        $busqueda = trim($request->get('buscar'));
        $oferentes = DB::table('oferentes')
            ->select('nombre', 'comuna', 'obra', 'valorContrato', 'escenarioAprobado')
            ->where('nombre','LIKE','%'.$busqueda.'%')
            ->orWhere('comuna','LIKE','%'.$busqueda.'%')
            ->orWhere('obra','LIKE','%'.$busqueda.'%')
            ->orderBy('nombre', 'asc')
            ->paginate(5);

        return view('buscar', compact('oferentes','busqueda'));
    }
}