<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contratosSociais extends Model
{
    use SoftDeletes;

    public function informacoesBasicas()
    {
        $this->belongsTo(informacoesBasicas::class);
    }
}
