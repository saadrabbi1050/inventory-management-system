<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductOrderRequest;
use App\Models\Product_order;
use Exception;
use Illuminate\Http\Request;

class ProductOrderController extends Controller
{
    public function index(){
        $product_orders=Product_order::all();        
        return view('backend.product_orders.index', compact('product_orders'));
    }
    public function create(){
        return view('backend.product_orders.create');
    }
    public function store(Request $request){
       try{
        $data=$request->all();
        Product_order::create($data);
        
        return redirect()->route('product_order.index')->withSuccess('product_order Added');
       }catch(Exception $e)
       {
        return redirect()->back()->withError($e->getMessage());
       }

    }

    public function edit($id){
        $product_orders=Product_order::all()->where('id',$id); 
        return view('backend.product_orders.edit',compact('product_orders'));
    }
    public function update(ProductOrderRequest $request, $id){
        try{
            $data=$request->except('_token');
        Product_order::where('id',$id)->update($data);
        return redirect()->route('product_order.index')->withSuccess('Update Done');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    public function destroy($id)
    {
       try{

        $product_order =  Product_order::find($id);
        $product_order->delete();
        return redirect()->route('product_order.index')->withMessage('Deleted Done');

       }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
       }
    }

}