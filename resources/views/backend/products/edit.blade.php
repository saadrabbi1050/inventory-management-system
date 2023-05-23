@extends('backend.layouts.master')


@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create Product</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                @foreach ($products as $product)
                <form action="{{ route('product.update',$product->id)}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputName" value="{{$product->name ?? ''}}">
                            @error('name')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" id="inputPrice" value="{{$product->price ?? ''}}">
                            @error('price')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputQty" class="col-sm-2 col-form-label">Qty</label>
                        <div class="col-sm-10">
                            <input type="text" name="qty" class="form-control" id="inputQty" value="{{$product->qty ?? ''}}">
                            @error('qty')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDescription" class="col-sm-2 col-form-label">description</label>
                        <div class="col-sm-10">
                        <textarea type="text" name="description"  id="ckeditor" class='form-control' value="{{$product->description ?? ''}}"> </textarea>
                            @error('contact')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary"> <i class="bi bi-xl bi-check"></i> Update</button>

                        <a href="{{ route('product.index')}}" class="btn btn-sm btn-danger"> <i class="bi bi-x"></i> Cancel</a>
                    </div>
                </form>
                @endforeach
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
@endsection
