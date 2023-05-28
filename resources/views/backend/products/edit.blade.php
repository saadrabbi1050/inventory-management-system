@extends('backend.layouts.master')


@section('main_content')

    @include('backend.layouts.includes.message')

    <div class="container">

            <div class="card">
                <div class="card-header">EDIT Product</div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id)}}" method="POST">
                        @csrf

                        <div>
                            <select class="form-select" name="category_id">
                                <option>Select Category</option>
                               @foreach ($categories as $cat)
                                    <option value="{{ $cat->id}}">{{ $cat->name ?? ''}}</option>
                               @endforeach
                            </select>
                        </div>
                        <br>
                        <div>
                            <select class="form-select" name="box_id">
                                <option>Select Box</option>
                               @foreach ($boxes as $bo)
                                    <option value="{{ $bo->id}}">{{ $bo->name ?? ''}}</option>
                               @endforeach
                            </select>
                        </div>
                        <br>
                        <div>
                            <select class="form-select" name="Supplier_id">
                                <option>Select Suppliers</option>
                               @foreach ($suppliers as $sup)
                                    <option value="{{ $sup->id}}">{{ $sup->name ?? ''}}</option>
                               @endforeach
                            </select>
                        </div>


                        <div>
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class='form-control' value="{{ $product->name}}"/>

                            @error('name')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror

                        </div>

                        <div>
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class='form-control' value="{{ $product->price }}"/>
                            @error('price')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label class="form-label">Qty</label>
                            <input type="text" name="qty" class='form-control' value="{{ $product->qty }}"/>
                            @error('qty')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class='form-control'/>
                            @error('image')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>


                        <button class="btn btn-sm btn-primary mt-3" type="submit"> <i class="bi bi-check"></i> Save</button>
                        <a class="btn btn-sm btn-danger mt-3" href="{{ route('product.index')}}"> <i class="bi bi-x"></i> cancel</a>

                    </form>
                </div>
            </div>

    </div>


@endsection
