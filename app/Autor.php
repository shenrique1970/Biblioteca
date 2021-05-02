<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model

{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = 'Autores';
    public $timestemps = false;
    protected $fillable = array('nome','nacionalidade','AnoNascto','anoMorte');
}
