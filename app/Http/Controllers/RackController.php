<?php

namespace App\Http\Controllers;

use App\Http\Requests\RackRequest;
use App\Models\Rack;
use App\Models\Store;

use Exception;
use Illuminate\Http\Request;

class RackController extends Controller
{
    public function index(){
        $racks=Rack::all();
        return view('backend.racks.index', compact('racks'));
    }
    public function create(){
        $stores = Store::all();
        return view('backend.racks.create', compact('stores'));
    }
    public function store(RackRequest $request){
       try{
        $data=$request->all();
        Rack::create($data);

        return redirect()->route('rack.index')->withSuccess('rack Added');
       }catch(Exception $e)
       {
        return redirect()->back()->withError($e->getMessage());
       }

    }

    public function edit($id){
        $racks=Rack::all()->where('id',$id);
        return view('backend.racks.edit',compact('racks'));
    }
    public function update(RackRequest $request, $id){
        try{
            $data=$request->except('_token');
            Rack::where('id',$id)->update($data);
        return redirect()->route('rack.index')->withSuccess('Update Done');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    public function destroy($id)
    {
       try{

        $rack =  Rack::find($id);
        $rack->delete();
        return redirect()->route('rack.index')->withMessage('Deleted Done');

       }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
       }
    }
}
