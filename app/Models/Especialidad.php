<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $fillable = ['id','especialidad'];

    public function pacientes(){
        return $this->hasMany(Paciente::class, 'id');
    }
}
