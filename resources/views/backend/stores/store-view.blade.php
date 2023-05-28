@extends('backend.layouts.master')

@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header bg-secondary text-white fs-3 text-center">Store View</div>
            <div class="card-body mb-2 bg-secondary text-black">
                <!-- Horizontal Form -->
                    @foreach($stores as $store) 
                        <div class="card p-3 mt-4 bg-info text-dark">
                            {{ $store->name }}  
                                @foreach($store->racks as $rack)

                                    <div class="card p-1 mt-2">
                                        {{ $rack->name }}
                                    </div>

                                            <div class="row">
                                                @foreach($rack->boxes as $box)
                                                    <div class="col-md-2 text-center ">
                                                        <div style="border:2px solid red ; height:40px; width:80px; margin:5px;">
                                                            {{ $box->name }}
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>

                                @endforeach
                        </div>
                    @endforeach
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
@endsection
