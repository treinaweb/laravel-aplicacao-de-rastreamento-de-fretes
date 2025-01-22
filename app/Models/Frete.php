<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Frete extends Model
{
    public function etapas(): HasMany
    {
        return $this->hasMany(Etapa::class);  
    }
}
