<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $table = 'utilisateurs';

    protected $fillable = [
        'nom', 'prenom', 'telephone', 'numero_electeur', 'numero_cni'
    ];
}
