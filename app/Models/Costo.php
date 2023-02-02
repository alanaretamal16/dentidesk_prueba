<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Costo
 *
 * @property $id
 * @property $descripcion
 * @property $valor_unitario
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Costo extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'valor_unitario' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','valor_unitario','cantidad'];



}
