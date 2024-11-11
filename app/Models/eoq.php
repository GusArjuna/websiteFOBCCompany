<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eoq extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rop',
        'eoqs',
        'demand',
    ];

    public function products(){
        return $this->belongsTo(product::class, 'name', 'name');
    }
}
