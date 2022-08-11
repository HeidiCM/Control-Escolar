<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $table='alumnos';

    protected $primaryKey='id';

    public $incrementing=true;

    public $timestamps=true;

    protected $fillable=[
        'matricula',
    	'nombres',
    	'apellido_p',
        'apellido_m',
        'semestre',
        'grupo',
        'estado',
        'created_at',
        'updated_at',
    ];
}
