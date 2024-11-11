<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'purchase',
        'sell',
        'storageCosts',
        'safetyStock',
        'lifetime',
        'available',
        'image',
    ];

    public function eoq(){
        return $this->hasOne(eoq::class, 'name', 'name');
    }
}
