<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Competencia
 *
 * @property $id
 * @property $nombre
 * @property $tipo
 * @property $programa_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario[] $horarios
 * @property Programa $programa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Competencia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipo' => 'required',
		'programa_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo','programa_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'competencia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Models\Programa', 'id', 'programa_id');
    }
    

}
