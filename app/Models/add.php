<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add extends Model
{
    use HasFactory;
    protected $fillable = [
        'u_id',
        'name',
        'rate',
        'colors',
        'size',
        'image'
       
    ];
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'product_id', 'id');
    }
}
