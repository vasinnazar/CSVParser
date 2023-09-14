<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'naming', 'level1', 'level2', 'level3',
        'price', 'sp_price', 'quantity', 'property_fields',
        'joint_purchases', 'measure_unit', 'image', 'main_page_display',
        'description'
    ];
}
