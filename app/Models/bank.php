<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'accno',
        'card',
        'cvv',
        'date',
    ];


}
