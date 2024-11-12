<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisOrder extends Model
{
    use HasFactory;

    protected $fillable=[
        'regisOrder',
        'name',
        'email',
        'destination',
        'date',
        'handphone',
    ];
    
    public function orders(){
        return $this->hasMany(order::class, 'regisOrder', 'regisOrder');
    }
}
