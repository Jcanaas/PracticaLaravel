<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Concert;
use App\Models\Genere;


class Artista extends Model
{
    protected $casts = [
        'actiu' => 'boolean'

    ];

    protected $table = 'artistes';
    protected $fillable = [
        'nom',
        'pais',
        'bio',
        'imatge_url',
        'actiu',
    ];
    public function concerts(): HasMany {
        return $this->hasMany(Concert::class);
    }

    public function generes(): BelongsToMany {
        return $this->belongsToMany(Genere::class);
    }
}


/*id
nom
pais
bio
imatge_url
actiu
/*timestamps*/

