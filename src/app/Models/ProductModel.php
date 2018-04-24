<?php

namespace App\Models;

class ProductModel extends BaseModel
{
    protected $table = 'products';

    protected $fillable = [
        'gross_price',
        'net_price',
        'images_m',
        'images_s',
        'color_id',
        'images_m',
    ];

    public function color()
    {
        return $this->hasOMany('App\Models\ColorModel');
    }

    public function scopeAllProducts($query)
    {
        return $query->paginate(10);
    }
}