<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    use HasFactory;
    protected $fillable = ['marca', 'precio', 'type'];
    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}
