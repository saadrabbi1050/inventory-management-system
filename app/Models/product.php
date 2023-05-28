<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "products";

    protected $fillable = ['name', 'price','qty', 'image','category_id','box_id','supplier_id', 'description'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function box(){
        return $this->belongsTo(Box::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

}
