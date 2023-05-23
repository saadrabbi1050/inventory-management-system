@extends('backend.layouts.master')

@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create  Product_transjection</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                <form action="{{ route(' product_transjection.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Store_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="store_id" class="form-control" id="inputTitle">
                            @error('store_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Rack_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="rack_id" class="form-control" id="inputTitle">
                            @error('rack_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Box_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="box_id" class="form-control" id="inputTitle">
                            @error('box_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Product_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_id" class="form-control" id="inputTitle">
                            @error('product_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Qty</label>
                        <div class="col-sm-10">
                            <input type="text" name="qty" class="form-control" id="inputTitle">
                            @error('qty')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" class="form-control" id="inputTitle">
                            @error('status')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary"> <i class="bi bi-xl bi-check"></i> Save</button>

                        <a href="{{ route(' product_transjection.index')}}" class="btn btn-sm btn-danger"> <i class="bi bi-x"></i> Cancel</a>
                    </div>
                </form>
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
@endsection
