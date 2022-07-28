<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dia
 *
 * @property $id
 * @property $nombre
 * @property $hora
 * @property $horario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario $horario
 * @property Hora[] $horas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'hora' => 'required',
		'horario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','hora','horario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horario()
    {
        return $this->hasOne('App\Models\Horario', 'id', 'horario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horas()
    {
        return $this->hasMany('App\Models\Hora', 'dia_id', 'id');
    }
    

}
