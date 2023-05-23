<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Exception;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){ 
        $stores=Store::all();
        return view('backend.stores.index', compact('stores'));
    }
    public function create(){
        return view('backend.stores.create');
    }
    public function store(StoreRequest $request){
       try{
        $data=$request->all();
        Store::create($data);

        return redirect()->route('store.index')->withSuccess('store Added');
       }catch(Exception $e)
       {
        return redirect()->back()->withError($e->getMessage());
       }

    }

    public function edit($id){
        $stores=Store::all()->where('id',$id);
        return view('backend.stores.edit',compact('stores'));
    }
    public function update(StoreRequest $request, $id){
        try{
            $data=$request->except('_token');
            Store::where('id',$id)->update($data);
        return redirect()->route('store.index')->withSuccess('Update Done');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    public function destroy($id)
    {
       try{

        $store =  Store::find($id);
        $store->delete();
        return redirect()->route('store.index')->withMessage('Deleted Done');

       }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
       }
    }
}
