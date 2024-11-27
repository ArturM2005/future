<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    /** @use HasFactory<\Database\Factories\NotebookFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'company',
        'number',
        'date_of_birth',
        'image'
    ];
}
