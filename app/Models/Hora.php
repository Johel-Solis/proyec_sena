<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;
    protected $table = 'horas';
    protected $fillable = ['hora_formato_24', 'dia_id'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;

    public function dia()
    {
        return $this->belongsTo(Dia::class);
    }

}
