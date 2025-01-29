<?php

namespace App\Models;

use App\Enums\FreteStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Frete extends Model
{
    protected $fillable = ['origem', 'destino', 'codigo_rastreio', 'status', 'remetente_id', 'destinatario_id'];

    protected $casts = [
        'status' => FreteStatus::class
    ];

    public function etapas(): HasMany
    {
        return $this->hasMany(Etapa::class);  
    }
}
