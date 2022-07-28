<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ambiente
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $tipo
 * @property $capacidad
 * @property $estado
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ambiente extends Model
{

    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'tipo' => 'required',
		'capacidad' => 'required',
		'ubicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','tipo','capacidad','estado','ubicacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'ambiente_id', 'id');
    }




}
