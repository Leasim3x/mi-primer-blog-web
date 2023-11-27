<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model // Acceso al los metodos CRUD
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];
}
