<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use app\Models\Concert;

class Entrada extends Model
{
    protected $casts = [


    ];
    protected $table = 'entrades';
    protected $fillable = [
        'user_id',
        'concert_id',
        'preu',
    ];
    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function concert(): belongsTo
    {
        return $this->belongsTo(Concert::class);
        return $this->belongsTo(User::class);
    }
}
