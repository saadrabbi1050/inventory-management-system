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

   




}
