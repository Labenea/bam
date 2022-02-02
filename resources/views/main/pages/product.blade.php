@extends('main.layout.app')

@section('content')

<div class="navbar-compen">
    <div class="py-5 mt-3 container">
        <div class="row">
            @foreach($data as $key => $value)
            <div data-aos="fade-up" data-aos-delay="{{$key * 50 }}" class="col-md-3 mb-4 col-12">
                <a href="{{route("product-detail",["slug" => $value->code ]) }}" class="text-decoration-none text-dark">
                    <div class="card product-card shadow rounded-3 h-100 card-hover">
                        <img src="{{asset(Storage::url($value->image))}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">{{$value->name}} </h6>
                            <p class="card-text">CODE: {{strtoupper($value->code)}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach


        </div>
    </div>
</div>
@endsection
