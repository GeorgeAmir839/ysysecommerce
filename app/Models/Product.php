<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable = [
        'name',
        
        'user_id', 
        'cart_id',
        'category',
        'productdesc',
        'qnt',
        'price',
        'slug',
        'image',
        'brand',
        'brand_id',
        'model',
        'keywords',
        'price_discount',
        'status',
      
        
    ];
    
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    // //yt3atel
    public function users(){
        return $this->belongsToMany(User::class,'product_users');
    }
    
}
