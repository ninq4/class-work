<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected  $fillable = [
        'title',
        'text',
        'color',
        'brand',
        'country',
        'guarantee',
        'image',
        'is_active',
        'category_id'
    ];

     public function category()
     {
         return $this -> belongsTo(Category::class, 'category_id', 'id');
     }
}
