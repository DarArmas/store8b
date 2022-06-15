<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $filleable = ['name', 'product_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function colors(){
        return $this->belongsToMany(Color::class, 'colors_sizes');
    }

    
}
