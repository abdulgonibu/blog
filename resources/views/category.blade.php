@extends('welcome')
@section('content')
    <div class="container">
        
        <div class="row grid md:grid-cols-3">
            @foreach ($category->portfolies as $logo)
                <div class="col-md-4 mb-3  ">
                    <div class="p-3 shadow ">
                        <img  src="{{ !empty($logo->image) ? url('upload/logo_images/' . $logo->image) : url('upload/no-image.png') }}"
                            height="400px" width="400px">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
