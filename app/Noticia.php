<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia';
    protected $primaryKey = 'id';
    protected $fillable = ['titular','entrada','cuerpo','imagen','fecha']
    public $timestamps = false;
}
