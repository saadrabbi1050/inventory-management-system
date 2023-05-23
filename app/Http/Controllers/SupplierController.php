<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Exception;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){

        $suppliers=Supplier::all();

        $suppliers=Supplier::all();

        return view('backend.suppliers.index', compact('suppliers'));
    }
    public function create(){
        return view('backend.suppliers.create');
    }
    public function store(Request $request){
       try{
        $data=$request->all();
        Supplier::create($data);

        return redirect()->route('supplier.index')->withSuccess('Supplier Added');
       }catch(Exception $e)
       {
        return redirect()->back()->withError($e->getMessage());
       }

    }

    public function edit($id){
        $suppliers=Supplier::all()->where('id',$id);

        $suppliers=Supplier::all()->where('id',$id);

        return view('backend.suppliers.edit',compact('suppliers'));
    }
    public function update(SupplierRequest $request, $id){
        try{
            $data=$request->except('_token');
        Supplier::where('id',$id)->update($data);
        return redirect()->route('supplier.index')->withSuccess('Update Done');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    public function destroy($id)
    {
       try{

        $supplier =  Supplier::find($id);
        $supplier->delete();
        return redirect()->route('supplier.index')->withMessage('Deleted Done');

       }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
       }
    }
}
