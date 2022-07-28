<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Class Horario
 *
 * @property $id
 * @property $cantidad_horas
 * @property $periodo_academico_id
 * @property $competencia_id
 * @property $docente_id
 * @property $ambiente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Ambiente $ambiente
 * @property Competencia $competencia
 * @property Dia[] $dias
 * @property Docente $docente
 * @property PeriodoAcademico $periodoAcademico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{

    static $rules = [
		'cantidad_horas' => 'required',
		'periodo_academico_id' => 'required',
		'competencia_id' => 'required',
		'docente_id' => 'required',
		'ambiente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad_horas','periodo_academico_id','competencia_id','docente_id','ambiente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ambiente()
    {
        return $this->hasOne('App\Models\Ambiente', 'id', 'ambiente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function competencia()
    {
        return $this->hasOne('App\Models\Competencia', 'id', 'competencia_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dias()
    {
        return $this->hasMany('App\Models\Dia', 'horario_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodoAcademico()
    {
        return $this->hasOne('App\Models\PeriodoAcademico', 'id', 'periodo_academico_id');
    }

    /*public function validarAmbiente(Request $request)
    {
        $horarios = Horario::where('ambiente_id',$request->input('ambiente_id'));
        foreach ($horario as  $horario) {
        $dias = Dia::where('horario_id',$horario->id);
        foreach ($dias as $dia) {

            if(($request -> input('lunes')) != null){
                foreach ($request -> input('lunes') as $key => $value) {
                    if($dia->hora == $value && $dia->nombre == 'Lunes'){
                        return true;

                    }
                }
            }
            if(($request -> input('martes')) != null){
                foreach ($request -> input('martes') as $key => $value) {
                    if($dia->hora == $value && $dia->nombre == 'Martes'){
                        return true;
                    }
                }
            }

            if (($request -> input('miercoles')) != null) {
                foreach ($request -> input('miercoles') as $key => $value) {
                    if($dia->hora == $value && $dia->nombre == 'Miercoles'){
                        return true;
                    }
                }
            }
            if (($request -> input('jueves')) != null) {
                foreach ($request -> input('jueves') as $key => $value) {
                    if($dia->hora == $value && $dia->nombre == 'Jueves'){
                        return true;
                    }
                }
            }
            if (($request -> input('viernes')) != null) {
                foreach ($request -> input('viernes') as $key => $value) {
                    if($dia->hora == $value  && $dia->nombre == 'Viernes'){
                        return true;
                    }
                }
            }
            if (($request -> input('sabado')) != null) {
                foreach ($request -> input('sabado') as $key => $value) {
                    if($dia->hora == $value   && $dia->nombre == 'Sabado'){
                        return true;
                    }
                }
            }
        }
        }
        return false;

     }

    */
}
