<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = ['name', 'description', 'price'];
    public function productimages() {
        return $this->hasMany(ProductImage::class);
    }
    public function products(){
        return $this->hasMany(Order_Detail::class);
    }

}
