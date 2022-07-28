<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PeriodoAcademico
 *
 * @property $id
 * @property $nombre
 * @property $tipo
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PeriodoAcademico extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipo' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo','fecha_inicio','fecha_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'periodo_academico_id', 'id');
    }
    

}
