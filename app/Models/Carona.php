<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carona extends Model
{
    protected $fillable = [
        'motorista', 'origem', 'destino', 'data_hora', 'vagas'
    ];


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
