<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function size(){
        return $this->hasMany(Size::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    
    
    public function subcategories(){
        return $this->belongsTo(Subcategory::class);
    }

    public function color(){
        return $this->hasMany(Color::class, 'color_product');
    }

    public function images(){
        return $this->morphMany(Image::class);
    }
    
}
