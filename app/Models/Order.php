<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'price', 'city', 'address', 'username', 'quantity', 'email', 'phoneNumber'];

    public function products()
    {
        return $this->belongsToMany(Product::class)
                    ->withPivot('quantity', 'price');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}