<?php

namespace App\Models;

use App\Enums\FreteStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Frete extends Model
{
    protected $casts = [
        'status' => FreteStatus::class
    ];

    public function etapas(): HasMany
    {
        return $this->hasMany(Etapa::class);  
    }
}
