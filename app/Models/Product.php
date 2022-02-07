<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillabble = ['product_name','product_code','brand_id','category_id','price','qty',
    'min_qty','max_qty','image','status'];
}
