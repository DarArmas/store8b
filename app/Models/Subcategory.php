<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class);
    }
    
    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
