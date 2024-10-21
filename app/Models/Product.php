<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes; // Add this line
    protected $fillable = [
        'title',
        'product_name',
        'product_code',
        'price',
        'description',
        'product_img',
        'is_admin', // Add this field
    ];

     // Optionally specify the date fields
    protected $dates = ['deleted_at'];
}
