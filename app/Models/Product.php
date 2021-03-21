<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */    
    protected $fillable = [
        'id',
        'product_name',
        'description',
        'style',
        'brand',
        'created_at',
        'updated_at',
        'url',
        'product_type',
        'shipping_price',
        'note',
        'admin_id'
    ];

    protected $table='products';
}
