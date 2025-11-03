<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarrosTrabalho extends Model
{
    protected $table = 'carros_trabalho';

    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'ano_fabricacao',
        'quilometragem',
        'valor',
        'detalhes',
        'img1',
        'img2',
        'img3'
    ];
}
