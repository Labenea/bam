@extends('main.layout.app')

@section('content')
<img src="{{ asset('images/cover/texture-woven-beige-straw-background-braids-from-plant-stem-close-up.jpg') }}" alt="" class="w-100 cover-image-sm">
<div class="w-100 position-absolute top-0 cover-screen-sm"></div>

<div class=" w-100 position-absolute top-0 d-flex flex-column align-items-center justify-content-center cover-heading-sm">
    <h1 data-aos="zoom-in" class="text-white  w-75">OUR PRODUCT</h1>
</div>

<div class="">
    <div class="container py-5">
        <div class="row">
            @foreach($data as $key => $value)
            <div class="col-md-4 mb-3">
                <a href="{{route("product-list",["slug" => strtolower($value->category)])}}" class="text-decoration-none text-dark">
                    <div class="card category-card shadow rounded-3 h-100 card-hover">
                        <img src="{{asset(Storage::url($value->cat_img))}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$value->category}}</h5>
                        </div>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
