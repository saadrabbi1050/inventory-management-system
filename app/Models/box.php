<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;
    protected $table = "boxes";


    protected $fillable = ['name','rack_id'];
    public function rack(){
        return $this->belongsTo(Rack::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
