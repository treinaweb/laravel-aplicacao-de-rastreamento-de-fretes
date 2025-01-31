<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etapa extends Model
{
    protected $fillable = ["frete_id", "descricao"];

    public function frete(): BelongsTo
    {
        return $this->belongsTo(Frete::class);
    }
}
