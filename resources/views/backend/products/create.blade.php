@extends('backend.layouts.master')


@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create product</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                <form action="{{ route('product.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputName">
                            @error('name')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" id="inputPrice" >
                            @error('price')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputQty" class="col-sm-2 col-form-label">Qty</label>
                        <div class="col-sm-10">
                            <input type="text" name="qty" class="form-control" id="inputQty" >
                            @error('qty')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                            <label class="form-label">Description</label>
                            <textarea type="text" name="description"  id="ckeditor" class='form-control'> </textarea>
                            @error('description')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>





                    <button class="btn btn-sm btn-primary mt-3" type="submit"> <i class="bi bi-check"></i> Save</button>
                        <a class="btn btn-sm btn-danger mt-3" href="{{ route('product.index')}}"> <i class="bi bi-x"></i> cancel</a>

                </form>
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>

@endsection
