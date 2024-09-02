<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // protected $table = 'notes'; //? Vincula con la tabla 'notes', laravel lo hace por defecto pero si no respetas la convencion de nombre para el modelo tienes que especificarlo.

    // protected $fillable = ['title', 'description', 'deadline', 'is_done']; //? Campos que acepta el modelo.

    // protected $guarded = []; //? Campos que no acepta el modelo, no se guardan por defecto. Lo contrario a $fillable. Si ya esta definido en $fillable, no es necesario definirlo ya que todo el resto de campos quedan en $guarded.

    // protected $casts = ['deadline' => 'date'];
    
    // protected $hidden = ['password']; //? Campos que no se mostraran. por ejemplo campos de password.
}