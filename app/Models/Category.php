<?php

namespace App\Models;

use App\Models\Subcategory;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    public function brands(){
        return $this->belongsToMany(Brand::class, 'brand_category');
    }

    public function subcategories(){
        return $this->belongsToMany(Subcategory::class, 'subcategory');
    }

    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    // public function products(){
    //     return $this->belongsToMany(Product::class, 'products');
    // }
}
