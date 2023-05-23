@extends('backend.layouts.master')


@section('main_content')
@include('backend.layouts.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header">Create Box</div>
            <div class="card-body">
                <!-- Horizontal Form -->
                @foreach ($boxes as $box)
                <form action="{{ route('box.update',$box->id)}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputTitle" value="{{$box->name ?? ''}}">
                            @error('name')
                                <div class="text-danger mt-3">{{$message}} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary"> <i class="bi bi-xl bi-check"></i> Update</button>

                        <a href="{{ route('box.index')}}" class="btn btn-sm btn-danger"> <i class="bi bi-x"></i> Cancel</a>
                    </div>
                </form>
                @endforeach
                <!-- End Horizontal Form -->
            </div>
        </div>
    </div>
@endsection
