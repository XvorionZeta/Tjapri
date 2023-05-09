<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function seller_details()
    {
        return $this->hasOne(UserDetails::class,'id','seller_id');
    }

    public function pic()
    {
        return $this->hasMany(ProductPicture::class,'product_id','id');
    }

}
