<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Concert;

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
    public function concerts(): HasMany
    {
    return $this->hasMany(Concert::class);
    }



}


/*id
nom
pais
bio
imatge_url
actiu
timestamps
*/

