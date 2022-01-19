@extends('main.layout.app')

@section('content')
<picture>
    <source media="(max-width: 599px)" srcset="{{ asset('images/cover/cover-s.jpg') }}">
    <source media="(min-width: 600px)" srcset="{{ asset('images/cover/cover-2.jpg') }}">
    <img src="{{ asset('images/cover/cover-2.jpg') }}" alt="" class="w-100 cover-image">
</picture>

<div class="w-100 position-absolute top-0 cover-screen "></div>

<div class=" w-100 position-absolute top-0 d-flex flex-column align-items-center justify-content-center cover-heading">
    <img src="{{ asset('images/icon/logo_no_text.png') }}" class="z-index-3 cover-logo" alt="">
    <h1 data-aos="zoom-in" class="text-white  w-75">YOUR BEST EXPORT IMPORT PARTNER</h1>
    <a href="{{route("about-us")}}" class="btn btn-primary">Learn More About Us</a>
</div>

<div class="my-5 container">
    <h6 class="text-center fw-bold text-secondary">OUR TOP</h6>
    <h2 class="text-center fw-bold blue-700">PRODUCT</h2>
    <div class="row my-3">
        @foreach($prod as $key => $value)
        <div class="col-md-6 col-12">
            <a href="{{route("product-detail",["slug" => $value->code ]) }}" class="text-decoration-none text-dark">
                <div class="card mb-3 shadow card-hover">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset(Storage::url($value->image))}}" class="horizontal-card rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 ">
                            <div class="card-body ">
                                <h5 class="card-title">{{$value->name}}</h5>
                                <p class="card-text mb-0"><span style="fw-bold">Code :</span> {{$value->code}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach



    </div>
    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="{{route("product-categories")}}" class="btn btn-primary">See More</a>
        </div>
    </div>
</div>

<div class="my-5  bg-blue-700">
    <div class="container py-4">
        <div class="py-5">
            <h6 class="text-center fw-bold text-white ">WHY</h6>
            <h2 class="text-center fw-bold text-white">CHOOSE US</h2>
        </div>
        <div class="row justify-content-evenly ">
            <div class="col-md-2 mb-5 mb-md-0">
                <div class="px-4 mb-4 d-flex justify-content-center">
                    <img src="{{ asset('images/icon/medal.png') }}" class="img-fluid choose-us-image " alt="">
                </div>
                <h4 class="text-center text-white mb-4">QUALITY</h4>
                <p class="text-center text-white">we really care about the standardization given by the importer to us what kind of goods they want </p>
            </div>
            <div class="col-md-2 mb-5 mb-md-0">
                <div class="px-4 mb-4 d-flex justify-content-center">
                    <img src="{{ asset('images/icon/solution.png') }}" class="img-fluid choose-us-image " alt="">
                </div>
                <h4 class="text-center text-white mb-4">SOLUTION</h4>
                <p class="text-center text-white">We want to be a solution for importers who want to take products from Indonesia </p>
            </div>
            <div class="col-md-2 mb-5 mb-md-0">
                <div class="px-4 mb-4 d-flex justify-content-center">
                    <img src="{{ asset('images/icon/clock.png') }}" class="img-fluid choose-us-image " alt="">
                </div>
                <h4 class="text-center text-white mb-4">RESPONSIVE</h4>
                <p class="text-center text-white">We have a very responsive team to meet the needs of importers</p>
            </div>
        </div>
    </div>

</div>

<div class="my-5 container">
    <h2 class="text-center fw-bold blue-700">INCOTERMS 2020</h2>
    <div class="py-5 row justify-content-evenly">
        <div class="col-md-3 mb-5 mb-md-0 ">
            <div class="px-4 mb-4 " style="height:200px;">
                <img src="{{ asset('images/icon/3.svg') }}" style="height:200px;" class="img-fluid mx-auto d-block" alt="">
            </div>
            <h4 class="text-center">FOB</h4>
            <h6 class="text-center">Freight on Board</h6>
        </div>
        <div class="col-md-3 mb-5 mb-md-0 ">
            <div class="px-4 mb-4" style="height:200px;">
                <img src="{{ asset('images/icon/2.svg') }}" style="height:200px;" class="img-fluid mx-auto d-block " alt="">
            </div>
            <h4 class="text-center">CIF</h4>
            <h6 class="text-center">Cost,Insurance,Freight</h6>
        </div>
        <div class="col-md-3 mb-5 mb-md-0">
            <div class="px-4 mb-4">
                <img src="{{ asset('images/icon/1.svg') }}" class="img-fluid mx-auto d-block" style="height:200px;" alt="">
            </div>
            <h4 class="text-center">EXW</h4>
            <h6 class="text-center">Exwork</h6>
        </div>
    </div>
</div>
@endsection
