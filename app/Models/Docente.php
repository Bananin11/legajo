<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table = 'docentes';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellidos','dni','lugar_nacimiento','domicilio_actual','nacimiento','celular','correo'];
}
