<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoxRequest;
use App\Models\Box;
use App\Models\Rack;
use Exception;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function index(){
        $boxes=Box::all();
        return view('backend.boxes.index', compact('boxes'));
    }
    public function create(){
        $racks = Rack::all();
        return view('backend.boxes.create', compact('racks'));
    }
    public function store(BoxRequest $request){
       try{
        $box  = Box::create([
            'name' => $request->name ,

            'rack_id' => $request->rack_id
        ]);


        return redirect()->route('box.index')->withSuccess('box Added');
       }catch(Exception $e)
       {
        return redirect()->back()->withError($e->getMessage());
       }

    }
    public function edit($id){
        $boxes=Box::all()->where('id',$id);
        return view('backend.boxes.edit',compact('boxes'));
    }
    public function update(BoxRequest $request, $id){
        try{
            $data=$request->except('_token');
            Box::where('id',$id)->update($data);
        return redirect()->route('box.index')->withSuccess('Update Done');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    public function destroy($id)
    {
       try{

        $box =  Box::find($id);
        $box->delete();
        return redirect()->route('box.index')->withMessage('Deleted Done');

       }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
       }
    }
}
