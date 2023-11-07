<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Vendor extends Authenticatable
{
    use HasFactory;
    use HasUuids;
    protected $fillable = ['name', 'email', 'password', 'shop_name', 'address', 'city', 'postal_code', 'profile_picture'];
}
