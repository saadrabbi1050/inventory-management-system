@extends('backend.layouts.master')


@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create  Product_transjection</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                @foreach ($product_transjections as $product_transjection)
                <form action="{{route('product_transjection.update',$Product_transjection->id)}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputTitle1" class="col-sm-2 col-form-label">Store_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="store_id" class="form-control" id="inputTitle1" value="{{$product_transjection->store_id ?? ''}}">
                            @error('store_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle2" class="col-sm-2 col-form-label">Rack_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="rack_id" class="form-control" id="inputTitle2" value="{{$product_transjection->rack_id ?? ''}}">
                            @error('rack_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle3" class="col-sm-2 col-form-label">Box_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="box_id" class="form-control" id="inputTitle3" value="{{$product_transjection->box_id ?? ''}}">
                            @error('box_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="inputTitle4" class="col-sm-2 col-form-label">Product_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_id" class="form-control" id="inputTitle4" value="{{$product_transjection->product_id ?? ''}}">
                            @error('product_id')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputTitle5" class="col-sm-2 col-form-label">Qty</label>
                        <div class="col-sm-10">
                            <input type="text" name="qty" class="form-control" id="inputTitle5" value="{{$product_transjection->qty ?? ''}}">
                            @error('qty')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTitle6" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" class="form-control" id="inputTitle6" value="{{$product_transjection->status ?? ''}}">
                            @error('status')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>








                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary"> <i class="bi bi-xl bi-check"></i> Update</button>

                        <a href="{{ route(' product_transjection.index')}}" class="btn btn-sm btn-danger"> <i class="bi bi-x"></i> Cancel</a>
                    </div>
                </form>
                @endforeach
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
@endsection
