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
        'product_img',
        'product_code',
        'price',
        'description',
        'is_admin', // Add this field
    ];
}
