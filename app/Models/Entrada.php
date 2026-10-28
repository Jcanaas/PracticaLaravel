<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entrada extends Model
{
    protected $casts = [

    ];
    protected $table = 'entrades';
    protected $fillable = [
        'user_id',
        'concert_id',
        'preu_pagat',
        'codi_entrada',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($entrada) {
            $entrada->codi_entrada = 'SONA-' . strtoupper(substr(md5(uniqid()), 0, 8));
        });
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function concert(): belongsTo
    {
        return $this->belongsTo(Concert::class);
    }
}
