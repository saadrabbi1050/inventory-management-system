<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;
    protected $table = "racks";


    protected $fillable = ['name','store_id'];
    public function racks()
    {
        return $this->hasMany(Product_transjection::class);
    }
}
