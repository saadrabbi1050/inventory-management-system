<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "products";

    protected $fillable = ['name', 'price','qty', 'image','category_id', 'description'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product_transjection::class);
    }



    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
