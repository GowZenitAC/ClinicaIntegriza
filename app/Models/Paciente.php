<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'diagnostico','edad','fecha_valoracion','telefono','direccion','historial','observaciones','seguimiento','id_especialidad'];

    public $timestamps = false;

    public function especialidades(){
        return $this->belongsTo(Especialidad::class, 'id_especialidad');
    }
    
    
}
