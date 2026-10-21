<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escenari extends Model
{

    protected $table = 'escenaris';

    protected $fillable = [
        'nom',
        'aforament_maxim',
        'ubicacio',
        'cobert',
    ];

    public function concerts(): HasMany
    {
        return $this->hasMany(Concert::class);
    }
}
