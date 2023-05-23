<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product_transjectionRequest;
use App\Models\Product_transjection;
use Exception;
use Illuminate\Http\Request;

class Product_transjectionController extends Controller
{
    public function index(){
        $product_transjections=Product_transjection::all();
        return view('backend.product_transjections.index', compact('product_transjections'));
    }
    public function create(){
        return view('backend.product_transjections.create');
    }
    public function store(Product_transjectionRequest $request){
       try{
        $data=$request->all();
        Product_transjection::create($data);

        return redirect()->route('product_transjection.index')->withSuccess('Product_transjection Added');
       }catch(Exception $e)
       {
        return redirect()->back()->withError($e->getMessage());
       }

    }

    public function edit($id){
        $product_transjections=Product_transjection::all()->where('id',$id);
        return view('backend.product_transjections.edit',compact('product_transjections'));
    }
    public function update(Product_transjectionRequest $request, $id){
        try{
            $data=$request->except('_token');
            Product_transjection::where('id',$id)->update($data);
        return redirect()->route('product_transjection.index')->withSuccess('Update Done');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    public function destroy($id)
    {
       try{

        $product_transjection =  Product_transjection::find($id);
        $product_transjection->delete();
        return redirect()->route('product_transjection.index')->withMessage('Deleted Done');

       }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
       }
    }
}
