<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class informacoesBasicas extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'website',
        'faturamento_ultimo_mes',
    ];

    public function selfs()
    {
        return $this->hasMany(selfs::class);
    }

    public function contatosSociais()
    {
        return $this->hasMany(contratosSociais::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
