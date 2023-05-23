<?php

            namespace App\Http\Controllers;

            use Exception;


            use App\Http\Requests\CategoryRequest;
            use App\Models\Category;
            use Illuminate\Http\Request;

            class CategoryController extends Controller
            {
                public function index()
                {
                    $categories = Category::all();
                    return view('backend.categories.index', compact('categories'));
                }

                public function create()
                {
                    return view('backend.categories.create');
                }
                public function show($id)
                {
                   $category =  category::find($id);
                   return view('backend.categories.show', compact('category'));
                }

                public function store(Request $request)
                {
                    try {
                        Category::create([
                            'name' => $request->name,
                            'description' => $request->description
                        ]);
                        return redirect()->route('category.index')->withMessage('Category Added');
                    } catch (Exception $e) {
                        return redirect()->back()->withError($e->getMessage());
                    }
                }


                public function edit($id){
                    $categories=Category::all()->where('id',$id);
                    return view('backend.categories.edit',compact('categories'));
                }
                public function update(Request $request, $id){
                    try{
                        $data=$request->except('_token');
                    Category::where('id',$id)->update($data);
                    return redirect()->route('category.index')->withSuccess('Update Done');
                    }catch(Exception $e){
                        return redirect()->back()->withError($e->getMessage());
                    }
                }



                public function destroy($id)
                {
                    try {

                        $category =  Category::find($id);
                        $category->delete();
                        return redirect()->route('category.index')->withMessage('Deleted Done');
                    } catch (Exception $e) {
                        return redirect()->back()->withError($e->getMessage());
                    }
                }
            }
