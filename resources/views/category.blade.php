@extends('welcome')
@section('content')

    <div class="container">
        
        <div class="row grid-container">
            @foreach ($category->portfolies as $logo)
                <div class="col-md-4 mb-3  ">
                    <div class="p-3 shadow ">
                        <img  src="{{ !empty($logo->image) ? url('public/upload/logo_images/' . $logo->image) : url('public/upload/no-image.png') }}"
                            height="400px" width="400px">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
