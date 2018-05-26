<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table      = 'servicio';
    protected $primaryKey = 'id_servicio';
    public $timestamps    = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'frecuencia',
    ];

    protected $guarded = [

    ];
}
