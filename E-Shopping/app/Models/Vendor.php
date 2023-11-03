<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Vendor extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = ['name', 'email', 'password', 'shop_name', 'address', 'city', 'postal_code', 'profile_picture'];
}
