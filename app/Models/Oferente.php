<?php

namespace App\Models;

use App\Models\Comuna;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Oferente extends Model
{
    use HasFactory;

    protected $fillable = ['comuna','obra','nombre','valorContrato','escenarioAprobado'];

    public static function validate(Request $request): void
    {
        $request->validate([
            'comuna' => 'required',
            'obra' => 'required',
            'nombre' => 'required',
            'valorContrato' => 'required',
            'escenarioAprobado' => 'required',
        ]);
    }

    public static function crearOferente(Request $request): void
    {
        $newOferente = new Oferente();
        $newOferente->setComuna($request->comuna);
        $newOferente->setNombre($request->nombre);
        $newOferente->setObra($request->obra);
        $newOferente->setValorContrato($request->valorContrato);
        $newOferente->setEscenarioAprobado($request->escenarioAprobado);
        $newOferente->save();
    }


    public function getComuna(): string
    {
        return $this->attributes['comuna'];
    }

    public function setComuna(string $comuna)
    {
        $this->attributes['comuna'] = $comuna;
    }

    public function getNombre(): string
    {
        return $this->attributes['nombre'];
    }

    public function setNombre(string $nombre): void
    {
        $this->attributes['nombre'] = $nombre;
    }

    public function getObra(): string
    {
        return $this->attributes['obra'];
    }

    public function setObra(string $obra): void
    {
        $this->attributes['obra'] = $obra;
    }

    public function getValorContrato(): int
    {
        return $this->attributes['valorContrato'];
    }

    public function setValorContrato(int $valorContrato): void
    {
        $this->attributes['valorContrato'] = $valorContrato;
    }

    public function getEscenarioAprobado(): string
    {
        return $this->attributes['escenarioAprobado'];
    }

    public function setEscenarioAprobado(string $escenarioAprobado): void
    {
        $this->attributes['escenarioAprobado'] = $escenarioAprobado;
    }
}
