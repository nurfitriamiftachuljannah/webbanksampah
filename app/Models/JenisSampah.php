<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'nama',
        'harga',
        'foto',
    ];

    public function sampahs()
    {
        return $this->hasMany(Sampah::class);
    }
}
