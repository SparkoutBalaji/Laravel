<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Order_Detail extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = ['order_id', 'product_id', 'count'];
}
