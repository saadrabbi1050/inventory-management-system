@extends('backend.layouts.master')


@section('main_content')
    @include('backend.layouts.includes.message')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
                Rack List
                <a href="{{ route('rack.create')}}" class="btn btn-sm btn-outline-primary">Add New Rack</a>
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
                            <th scope="col">name</th>
                            <th scope="col">store_id</th>


                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count=1;
                        @endphp
                        @foreach ($racks as $rack)
                        <tr>
                            <th scope="row">#PS24{{$count++}} </th>
                            <td>{{$rack->name?? ''}} </td>
                            <td>{{$rack->store_id?? ''}} </td>

                            <td>

                                <a href="{{ route('rack.edit',$rack->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('rack.destroy', $rack->id)}}" method="POST" style="display: inline">
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
