<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $fillable = [
        'marca',
        'modelo',
        'año',
        'color',
        'fechaMatricula',
      ];
}
