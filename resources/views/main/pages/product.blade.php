@extends('main.layout.app')

@section('content')
<img src="{{ asset('images/cover/texture-woven-beige-straw-background-braids-from-plant-stem-close-up.jpg') }}" alt="" class="w-100 cover-image-sm">
<div class="w-100 position-absolute top-0 cover-screen-sm"></div>

<div class=" w-100 position-absolute top-0 d-flex flex-column align-items-center justify-content-center cover-heading-sm" >
    <h1 data-aos="zoom-in" class="text-white  w-75">OUR PRODUCT</h1>
</div>

<div class="py-5 mt-3 container">
    <div class="row">
        <div class="col-md-3 mb-4 mb-md-0 col">
            <div class="card product-card shadow rounded-3 h-100" >
                <img src="{{asset('images/products/Banana  Basket Combination 1set of 3. Cover Pot Banana.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Banana Basket Combination 1 set of 3 </h6>
                  <p class="card-text">CODE: BL001</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 mb-md-0 col">
            <div class="card product-card shadow rounded-2 h-100" >
                <img src="{{asset('images/products/Walldecor seagrass with macrame (large size).jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Walldecor seagrass with macrame (large size)</h6>
                  <p class="card-text">CODE: SG006</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 mb-md-0 col">
            <div class="card product-card shadow rounded-2 h-100" >
                <img src="{{asset('images/products/Water Hyacinth Laundry Basket With Lid.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Water Hyacinth Laundry Basket With Lid.</h6>
                  <p class="card-text">CODE: WH012</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 mb-md-0 col">
            
        </div>
    </div>
</div>
@endsection