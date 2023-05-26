<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;
    protected $table = "boxes";


    protected $fillable = ['name','rack_id'];
    public function boxes()
    {
        return $this->hasMany(Product_transjection::class);
    }
}
