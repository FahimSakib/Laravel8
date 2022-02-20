<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['material_name'];

    public function products(){
        return $this->belongsToMany(Product::class)->withTimestamps()->withPivot('material_qty');
    }
}
