<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const DELETED = 1;
    const RELEASED = 2;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function size(){
        return $this->hasMany(Size::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    
    
    public function subcategories(){
        return $this->belongsTo(Subcategory::class, 'subcategory_id', 'id');
    }

    public function colors(){
        return $this->belongsToMany(Color::class, 'color_product');
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
    
}
