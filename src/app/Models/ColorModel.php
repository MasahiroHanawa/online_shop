<?php

namespace App\Models;

class ColorModel extends BaseModel
{
    protected $table = 'colors';

    protected $fillable = [
        'code',
        'name'
    ];

    public function product()
    {
        return $this->belongsTomany('App\Models\ProductModel');
    }
    
}