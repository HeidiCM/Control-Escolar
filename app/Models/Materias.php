<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;
    protected $table='materias';

    protected $primaryKey='id_materia';

    public $with=['docente'];

    public $incrementing=true;

    public $timestamps=true;

    protected $fillable=[
        'nombre',
        'grupos',
        'semestre',
        'formacion',
        'created_at',
        'updated_at',
        'id_docente',
    ];
    public function docente(){
        return $this->belongsTo(Docentes::class, 'id_docente', 'id_docente');
    }
}
