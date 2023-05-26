@extends('backend.layouts.master')


@section('main_content')
    @include('backend.layouts.includes.message')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
                Store List
                <a href="{{route('product_transjection.create')}}" class="btn btn-sm btn-outline-primary">Add New Product_transjection</a>
                <div class="ps-5">
                    <button class="btn btn-sm btn-primary">PDF</button>
                    <button class="btn btn-sm btn-success">EXCEL</button>
                    <button class="btn btn-sm btn-warning">TRASH BIN</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th scope="col">Ser No</th>
                            <th scope="col">store_id</th>
                            <th scope="col">rack_id</th>
                            <th scope="col">box_id</th>
                            <th scope="col">product_id</th>
                            <th scope="col">qty</th>
                            <th scope="col">status</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count=1;
                        @endphp
                        @foreach ($product_transjections  as $product_transjection)
                        <tr>
                            <th scope="row">#PS24{{$count++}} </th>
                            <td>{{$product_transjection->store_id?? ''}} </td>
                            <td>{{$product_transjection->rack_id?? ''}} </td>
                            <td>{{$product_transjection->box_id?? ''}} </td>
                            <td>{{$product_transjection->product_id?? ''}} </td>
                            <td>{{$product_transjection->qty?? ''}} </td>
                            <td>{{$product_transjection->status?? ''}} </td>

                            <td>

                                <a href="{{ route('product_transjection.edit',$product_transjection->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('product_transjection.destroy', $product_transjection->id)}}" method="POST" style="display: inline">
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
