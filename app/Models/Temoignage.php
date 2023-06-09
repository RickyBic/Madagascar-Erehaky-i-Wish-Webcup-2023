<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    use HasFactory;

    public function utlilisateur() {
        return $this->belongsTo(Utilisateur::class);
    }
}
