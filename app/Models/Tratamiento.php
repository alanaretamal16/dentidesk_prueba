<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tratamiento
 *
 * @property $id
 * @property $descripcion
 * @property $valor
 * @property $pieza_dental
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamiento extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'valor' => 'required',
		'pieza_dental' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','valor','pieza_dental','fecha'];



}
