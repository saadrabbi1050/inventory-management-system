@extends('backend.layouts.master')

@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create Store</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                    @foreach($stores as $store) 
                        <div class="card p-3">
                            {{ $store->name }}  
                                @foreach($store->racks as $rack)

                                    <div class="card p-1 mt-2">
                                        {{ $rack->name }}
                                    </div>

                                            <div class="row">
                                                @foreach($rack->boxes as $box)
                                                    <div class="col-md-2">
                                                        <div style="border:1px solid red ; height:40px; width:80px; margin:5px">
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
