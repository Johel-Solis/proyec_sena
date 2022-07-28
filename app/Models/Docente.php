<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $tipo_documento
 * @property $area
 * @property $tipo_docente
 * @property $tipo_contrato
 * @property $estado
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario[] $horarios
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{

    static $rules = [
        'id' => 'required|unique:docentes',
		'nombre' => 'required',
		'apellido' => 'required',
		'email' => 'required',
		'tipo_documento' => 'required',
		'area' => 'required',
		'tipo_docente' => 'required',
		'tipo_contrato' => 'required',
		'estado' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nombre','apellido','email','tipo_documento','area','tipo_docente','tipo_contrato','estado','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'docente_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


}
