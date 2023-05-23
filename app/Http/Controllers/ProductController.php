<?php

            namespace App\Http\Controllers;

            use Exception;


            use App\Http\Requests\ProductRequest;
            use App\Models\Product;
            use Illuminate\Http\Request;

            class ProductController extends Controller
            {
                public function index()
                {
                    $products= Product::all();
                    return view('backend.products.index', compact('products'));
                }

                public function create()
                {
                    return view('backend.products.create');
                }
                public function show($id)
                {
                   $product =  product::find($id);
                   return view('backend.products.show', compact('product'));
                }





                public function store(Request $request)
                {

                    try {
                        Product::create([
                            'name' => $request->name,
                            'price' => $request->price,
                            'qty' => $request->qty,
                            'description' => $request->description
                        ]);
                        return redirect()->route('product.index')->withMessage('Product Added');
                    } catch (Exception $e) {
                        // dd($e->getMessage());
                        return redirect()->back()->withError($e->getMessage());
                    }
                }


                public function edit($id){
                    $products=Product::all()->where('id',$id);
                    return view('backend.products.edit',compact('products'));
                }
                public function update(Request $request, $id){
                    try{
                        $data=$request->except('_token');
                    Product::where('id',$id)->update($data);
                    return redirect()->route('product.index')->withSuccess('Update Done');
                    }catch(Exception $e){
                        return redirect()->back()->withError($e->getMessage());
                    }
                }


                public function destroy($id)
                {
                    try {

                        $product =Product::find($id);
                        $product->delete();
                        return redirect()->route('product.index')->withMessage('Deleted Done');
                    } catch (Exception $e) {
                        return redirect()->back()->withError($e->getMessage());
                    }
                }

                public function trashlist()
                {
                   $products =  Product::onlyTrashed()->get();

                   return view('backend.products.trashlist', ['products' => $products]);
                }

                public function restore($id)
                {
                    Product::withTrashed()
                            ->where('id', $id)
                            ->restore();

                    return redirect()->route('product.index')->withMessage('Product Restore Successfully');
                }

                public function restoreAll()
                {
                    Product::withTrashed()->restore();
                    return redirect()->route('product.index')->withMessage('Product Restore Successfully');
                }

                public function delete($id)
                {
                    Product::withTrashed()
                            ->where('id', $id)
                            ->forceDelete();
                    return redirect()->back()->withMessage('Permanent Deleted');

                }

            }
