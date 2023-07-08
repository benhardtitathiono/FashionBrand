<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'product_brand');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'product_type');
    }
}
