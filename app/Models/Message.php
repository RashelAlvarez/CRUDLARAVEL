<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    //proteger los campos del formulario proteccion contra la asignacion masiva de datos
    protected $fillable = ['nombre', 'email', 'mensaje'];
    
}
