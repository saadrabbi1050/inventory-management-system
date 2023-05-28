@extends('backend.layouts.master')

@section('main_content')

@include('backend.layouts.includes.message')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
              Product List
              <a class="btn btn-sm btn-outline-primary ms-4" href="{{ route('product.create')}}" > <i class="bi bi-plus"></i> Add New Product</a>
              <div class="ps-5">
                <a class="btn btn-sm btn-primary" href="" target="_blank"> <i class="bi bi-file-earmark-fill"></i> PDF</a>
                <a class="btn btn-sm btn-success" href=""> <i class="bi bi-file-earmark-excel"></i> EXCEL</a>
                <a class="btn btn-sm btn-warning" href="{{ route('product.trashlist')}}"> <i class="bi bi-trash"></i> BIN</a>


              </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered datatable">
                    <thead>
                      <tr>
                        <th scope="col">Ser No</th>
                        <th scope="col">Name</th>
                        <th>Category Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>

                        <th scope="col">Image</th>
                        <th scope="col">Box Name</th>
                        <th scope="col">Supplier Name</th>
                        <th scope="col">Description</th>

                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      @php
                        $sl = 1;
                      @endphp

                      @foreach ($products as $product)
                          <tr>
                            <th scope="row"> {{ $sl++ }} </th>
                            <td>{{ $product->name ?? '' }}</td>
                            <td> {{ $product->category->name ?? ' '}}</td>
                            <td>{{ $product->price ?? 'No Price Setup' }}</td>
                            <td> {{ $product->qty ?? ' '}}</td>




                            <td>

                              @if(file_exists(storage_path().'/app/public/products/'.$product->image ))

                              <img src="{{ asset('storage/products/'.$product->image) }}" height="100">

                              @else
                               Image NAI
                              @endif

                            </td>
                            <td> {{ $product->box->name ?? ' '}}</td>
                            <td> {{ $product->supplier->name ?? ' '}}</td>
                            <td>{{ $product->description ?? ' '}}</td>





                            <td>
                              <a class="btn btn-sm btn-primary" href="{{ route('product.show', $product->id)}}"><i class="bi bi-eye"></i></a>

                              <a class="btn btn-sm btn-warning" href="{{ route('product.edit', $product->id)}}"><i class="bi bi-pen"></i></a>

                              <form action="{{ route('product.destroy', $product->id)}}" method="POST" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>

                              </form>



                            </td>
                          </tr>
                      @endforeach


                    </tbody>
                  </table>
            </div>
        </div>
    </div>


@endsection
