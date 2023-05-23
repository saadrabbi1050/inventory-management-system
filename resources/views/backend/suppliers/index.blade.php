@extends('backend.layouts.master')



@section('main_content')
    @include('backend.layouts.includes.message')
    
    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
                 Supplier List
                <a href="{{ route('supplier.create')}}" class="btn btn-sm btn-outline-primary">Add New Supplier</a>
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
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                           
                           
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count=1;
                        @endphp
                        @foreach ($suppliers as $supplier)
                        <tr>
                            <th scope="row">#PS24{{$count++}} </th>
                            <td>{{$supplier->name ?? ''}} </td>
                            <td>{{$supplier->address ?? ''}} </td>
                            <td>{{$supplier->email ?? ''}}</td>
                            <td>{{$supplier->contact ?? ''}} </td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Details</a>
                                <a href="{{ route('supplier.edit',$supplier->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('supplier.destroy', $supplier->id)}}" method="POST" style="display: inline">
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
