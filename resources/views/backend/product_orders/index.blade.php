@extends('backend.layouts.master')



@section('main_content')
    @include('backend.layouts.includes.message')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
                 Product order  List
                <a href="{{ route('product_order.create')}}" class="btn btn-sm btn-outline-primary">Add New product_order </a>
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
                            <th scope="col">Name</th>
                            <th scope="col">product_order_no</th>
                            <th scope="col">status</th>
                            <th scope="col">supplier_id</th>
                            <th scope="col">Supplier_name</th>


                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count=1;
                        @endphp
                        @foreach ($product_orders as $product_order )
                        <tr>
                            <th scope="row">#PS24{{$count++}} </th>
                            <td>{{$product_order->name ?? ''}} </td>
                            <td>{{$product_order->product_order_no ?? ''}} </td>
                            <td>{{$product_order->status ?? ''}}</td>
                            <td>{{$product_order->supplier_id ?? ''}} </td>
                            <td>{{$product_order->supplier_name ?? ''}} </td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Details</a>
                                <a href="{{ route('product_order.edit',$product_order->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('product_order.destroy', $product_order->id)}}" method="POST" style="display: inline">
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

    <!---HTML Code -
<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Product Order List</title>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
crossorigin="anonymous">
 </head>
 <body>
 <div class="container text-center bg-success text-light my-2 p-2">
 <h1>Product Order List</h1>
 <div class="card">
            <div class="card-header d-flex">
                 Product order List
                <a href="{{ route('product_order.create')}}" class="btn btn-sm btn-outline-primary">Add New product_order </a>
                <div class="ps-5">
                    <button class="btn btn-sm btn-primary">PDF</button>
                    <button class="btn btn-sm btn-success">EXCEL</button>
                    <button class="btn btn-sm btn-warning">TRASH BIN</button>
                </div>
            </div>

 </div>
 <div class="container">
 <table class="table table-bordered">
 <thead>
 <tr>
                            <th scope="col">Ser No</th>

                            <th scope="col">product_order_id</th>
                            <th scope="col">product_id</th>
                            <th scope="col">product_title</th>
                            <th scope="col">quantity</th>
                            <th scope="col">unite_price</th>
                            <th scope="col">total_price</th>
                            <th scope="col">receive_quantity</th>
                            <th scope="col">invoice_number</th>
                            <th scope="col">invoice_document</th>



                            <th scope="col">Action</th>
                        </tr>
 </thead>
 <tbody id="dynamicadd">
 @php
                            $count=1;
                        @endphp
                        @foreach ($product_orders

                        as $product_order )


 <tr>
                            <th scope="row">{{$count++}} </th>

                            <td>{{$product_order_item->product_order_id ?? ''}} </td>
                            <td>{{$product_order_item->product_id ?? ''}} </td>
                            <td>{{$product_order_item->product_title ?? ''}}</td>
                            <td>{{$product_order_item->quantity ?? ''}} </td>
                            <td>{{$product_order_item->unite_price ?? ''}} </td>
                            <td>{{$product_order_item->total_price ?? ''}} </td>
                            <td>{{$product_order_item->receive_quantity ?? ''}} </td>
                            <td>{{$product_order_item->invoice_number ?? ''}} </td>
                            <td>{{$product_order_item->invoice_document ?? ''}} </td>
                            <td>
                            @endforeach

 </tbody>
 </table>

 </div>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript">
 $(document).ready(function(){
 var i = 1;
 $('#add').click(function(){
 //alert('ok');
 i++;
 $('#dynamicadd').append('<tr id="row'+i+'"><td><input type="text" name="name[]"
id="name" class="form-control"></td><td><input type="email" name="email[]" id="email"
class="form-control"></td><td><input type="text" name="phone[]" id="phone" class="formcontrol"></td><td><input type="file" name="photo[]" id="photo" class="formcontrol"></td><td><button type="button" id="'+i+'" class="btn btn-danger remove_row">-
</button></td></tr>');
 });
 $(document).on('click','.remove_row',function(){
 var row_id = $(this).attr("id");
 $('#row'+row_id+'').remove();
 });
 });
 </script>

 </body>
</html>
@endsection
