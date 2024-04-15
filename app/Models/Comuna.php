<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Comuna extends Model
{
    use HasFactory;

    protected $fillable = [];

    public static function validate(Request $request): void
    {
        $request->validate([
            'location' => 'required',
            'Number' => 'required',
            'Name' => 'required',
            'Scenarios' => 'required',
            'Zone' => 'required',
        ]);
    }

    public function getLocation(): string
    {
        return $this->attributes['location'];
    }

    public function setLocation(string $location): void
    {
        $this->attributes['location'] = $location;
    }

    public function getNumber(): int
    {
        return $this->attributes['Number'];
    }

    public function setNumber(int $Number): void
    {
        $this->attributes['Number'] = $Number;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $Name): void
    {
        $this->attributes['name'] = $Name;
    }

    public function getZone(): int
    {
        return $this->attributes['zone'];
    }

    public function setZone(int $Zone): void
    {
        $this->attributes['zone'] = $Zone;
    }

    public function getScenarios(): int
    {
        return $this->attributes['Scenarios'];
    }

    public function setScenarios(int $Scenarios): void
    {
        $this->attributes['Scenarios'] = $Scenarios;
    }
}