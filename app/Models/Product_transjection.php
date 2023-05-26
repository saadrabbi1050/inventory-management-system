<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Product_transjection extends Model
{
    use HasFactory;

    protected $table = "product_transjection";


    protected $fillable = ['store_id','rack_id','box_id','product_id','qty','status'];

   public function store(){
        return $this->belongsTo(Store::class);
    }
    public function rack(){
        return $this->belongsTo(Rack::class);

    }
    public function box(){
        return $this->belongsTo(Box::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }





}
