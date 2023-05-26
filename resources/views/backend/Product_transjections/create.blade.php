@extends('backend.layouts.master')

@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create  Product_transjection</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                <form action="{{ route('product_transjection.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputTitle1" class="col-sm-2 col-form-label">Store Name</label>
                        <div class="col-sm-10">
                            <select name="store_id" class="form-control">
                                <option value=""> select stores </option>
                           @foreach($stores as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                           @endforeach
                        </select>
                        </div>

                    <div class="row mb-3">
                        <label for="inputTitle2" class="col-sm-2 col-form-label">Rack Name</label>
                        <div class="col-sm-10">
                            <select name="rack_id" class="form-control">
                                <option value=""> select racks </option>
                           @foreach($racks as $rack)
                                <option value="{{ $rack->id }}">{{ $rack->name }}</option>
                           @endforeach
                        </select>
                        </div>

                        <div class="row mb-3">
                        <label for="inputTitle3" class="col-sm-2 col-form-label">Box Name</label>
                        <div class="col-sm-10">
                            <select name="box_id" class="form-control">
                                <option value=""> select boxes </option>
                           @foreach($stores as $store)
                                <option value="{{ $box->id }}">{{ $box->name }}</option>
                           @endforeach
                        </select>
                        </div>


                        <div class="row mb-3">
                        <label for="inputTitle4" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <select name="product_id" class="form-control">
                                <option value=""> select boxes </option>
                           @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                           @endforeach
                        </select>
                        </div>


                    <div class="row mb-3">
                        <label for="inputTitle5" class="col-sm-2 col-form-label">Qty</label>
                        <div class="col-sm-10">
                            <input type="text" name="qty" class="form-control" id="inputTitle5">
                            @error('qty')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle6" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" class="form-control" id="inputTitle6">
                            @error('status')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary"> <i class="bi bi-xl bi-check"></i> Save</button>

                        <a href="{{ route('product_transjection.index')}}" class="btn btn-sm btn-danger"> <i class="bi bi-x"></i> Cancel</a>
                    </div>
                </form>
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
@endsection
