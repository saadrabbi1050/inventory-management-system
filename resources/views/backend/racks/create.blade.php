@extends('backend.layouts.master')

@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create rack</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                <form action="{{ route('rack.store')}}" method="POST">
                    @csrf


                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Store Name</label>
                        <div class="col-sm-10">
                            <select name="store_id" class="form-control">
                                <option value=""> select stores </option>
                           @foreach($stores as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                           @endforeach
                        </select>
                        </div>

                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputTitle">
                            @error('name')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary"> <i class="bi bi-xl bi-check"></i> Save</button>

                        <a href="{{ route('rack.index')}}" class="btn btn-sm btn-danger"> <i class="bi bi-x"></i> Cancel</a>
                    </div>
                </form>
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
@endsection
