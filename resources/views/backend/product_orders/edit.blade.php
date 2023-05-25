@extends('backend.layouts.master')


@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create product_orders</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                @foreach ($product_orders as $product_order)
                <form action="{{ route('product_order.update',$product_order->id)}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputName" value="{{$product_order->name ?? ''}}">
                            @error('name')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputProduct_order_no" class="col-sm-2 col-form-label">product_order_no</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_order_no" class="form-control" id="inputProduct_order_no" value="{{$product_order->product_order_no ?? ''}}">
                            @error('product_order_no')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" class="form-control" id="inputStatusl" value="{{$product_order->status ?? ''}}">
                            @error('status')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputSupplier_id" class="col-sm-2 col-form-label">Supplier id</label>
                        <div class="col-sm-10">
                            <input type="text" name="supplier_id" class="form-control" id="inputSupplier_id" value="{{$product_order->supplier_id ?? ''}}">
                            @error('supplier_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputSupplier_name" class="col-sm-2 col-form-label">Supplier name</label>
                        <div class="col-sm-10">
                            <input type="text" name="supplier_name" class="form-control" id="inputSupplier_name" value="{{$product_order->supplier_name ?? ''}}">
                            @error('supplier_name')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary"> <i class="bi bi-xl bi-check"></i> Update</button>
                        
                        <a href="{{ route('product_order.index')}}" class="btn btn-sm btn-danger"> <i class="bi bi-x"></i> Cancel</a>
                    </div>
                </form>
                @endforeach
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
@endsection
