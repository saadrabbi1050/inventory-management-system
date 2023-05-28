<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;
    protected $table = "racks";


    protected $fillable = ['name','store_id'];
    public function store(){
        return $this->belongsTo(Store::class);
    }
    public function boxes()
    {
        return $this->hasMany(Box::class);
    }

}
