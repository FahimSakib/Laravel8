<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillabble = ['product_name','product_code','brand_id','category_id','price','qty',
    'min_qty','max_qty','image','status'];

    public function brand()
    {
        return $this->belongsTo(Brand::class)->withDefault(['brand_name' => 'local']);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class)->withTimestamps()->withPivot('material_qty');
    }

    public static function GetProducts(){
       return Cache::remember('_product_list', 60, function(){
            return Product::take(20)->get();
        });
    }

    public static function flush(){
        return Cache::forget('_product_list');
    }

    public static function boot(){
        parent::boot();

        static::created(function(){
            static::flush();
        });
        static::updated(function(){
            static::flush();
        });
        static::deleted(function(){
            static::flush();
        });
    }
}
