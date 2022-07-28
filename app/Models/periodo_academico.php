<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo_academico extends Model
{
    use HasFactory;
    protected $table = 'periodo_academicos';
    protected $fillable = ['nombre','tipo', 'fecha_inicio', 'fecha_fin'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;

    public function horarios()
    {
        return $this->hasMany(horario::class);
    }

}
