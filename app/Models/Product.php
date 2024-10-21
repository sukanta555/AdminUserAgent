<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'product_name',
        'product_code',
        'price',
        'description',
        'product_img',
        'is_admin', // Add this field
    ];
}
