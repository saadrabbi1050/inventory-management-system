<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $table = "suppliers";


    protected $fillable = ['name','address','email','contact'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
