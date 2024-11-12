<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        // Correct the foreign key to 'product_id' and reference 'u_id' in the `Add` model
        return $this->belongsTo(Add::class, 'product_id', 'id');
    }
}

