<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable=[
        'regisOrder',
        'quantity',
        'product',
    ];
    
    public function regisOrders(){
        return $this->belongsTo(RegisOrder::class, 'regisOrder', 'regisOrder');
    }
}
