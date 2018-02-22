<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignacion';
    protected $guarded = [];

    public function curso() {
        return $this->belongsTo("App\Curso", 'idCurso', 'id');
    }

    public function usuario() {
        return $this->belongsTo('App\Usuario', 'idUsuario', 'id');
    }
}
