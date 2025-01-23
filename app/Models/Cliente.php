<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    public function enviados(): HasMany
    {
        return $this->hasMany(Frete::class, 'remetente_id');
    }

    public function recebidos(): HasMany
    {
        return $this->hasMany(Frete::class, 'destinatario_id');
    }
}
