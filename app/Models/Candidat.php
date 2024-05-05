<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $table = 'candidats';

    protected $fillable = [
        'nom',
        'prenom',
        'profession',
        'partie_politique',
        'programme_file_path',
        'description'
    ];
}
