<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_order extends Model
{
    use HasFactory;
    protected $table = "product_orders";


    protected $fillable = ['name','product_order_no','status','supplier_id','supplier_name'];
}
