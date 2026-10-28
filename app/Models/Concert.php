<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Artista;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Concert extends Model
{
    protected $casts = [
        'data_hora' => 'datetime',

    ];
    protected $table = 'concerts';
    protected $fillable = [
        'artista_id',
        'escenari_id',
        'nom',
        'data_hora',
        'durada_minuts',
        'tipus',
    ];

    public function artista(): BelongsTo {
        return $this->belongsTo(Artista::class);
    }

    public function escenari(): BelongsTo {
        return $this->belongsTo(Escenari::class);
    }
}
/*
id
artista_id
nom
data_hora
durada_minuts
tipus
timestamps
*/
