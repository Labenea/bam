@extends('main.layout.app')

@section('content')

<section class="navbar-compen">
    <div class=" py-5 container ">
        <div class="py-5">
            <h3 data-aos="zoom-in" class="text-center">Learn More</h3>
            <h1 data-aos="zoom-in" class="text-center blue-600 fw-bold"> About Our Story</h1>
        </div>
    </div>
    <div id="ourStory"  class="py-5 bg-blue-700">
        <div class="container">
            <div class=" row justify-content-center">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h2 data-aos="fade-right"  class="text-white text-md-start text-center ">Our Story</h2>
                </div>
                <div class="col-md-auto">
                    <div class="float-md-end d-md-block d-flex">
                        <div data-aos="fade-up" data-aos-delay="100" class="about-us-info">
                            <div class="px-5">
                                <img src="{{asset("images/icon/since.png")}}" class="img-fluid mx-auto d-block" alt="">
                            </div>
                            <h6 class="text-white mt-3 text-center">Since 2021</h6>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200" class="about-us-info">
                            <div class="px-5">
                                <img src="{{asset("images/icon/archipelago.png")}}" class="img-fluid  mx-auto d-block" alt="">
                                <h6 class="text-white mt-3 text-center">Based in Indonesia</h6>
                            </div>

                        </div>
                    </div>

                </div>
                <div data-aos="fade-left" data-aos-delay="250" class="col-md-6">
                    <p class="text-white">
                        Bawera Artha Makmur Ltd was established in 2021 based on the desire to advance the Indonesian economy by facilitating craftsmen, farmers and fishermen to sell their products abroad with guaranteed quality through manufacturer standards.</p>
                    <h5 class="text-white">Our Office</h5>
                    <p class="text-white">Villa Bukit Tidar C1-501 Malang, Jawa Timur, Indonesia.</p>
                    <h5 class="text-white">Our Teams</h5>

                    <p class="text-white mb-0">Robby Aryanto (Komisaris)</p>
                    <a class="link-light" href="mailto:robby@baweraarthamakmur.com">Email : Robby@baweraarthamakmur.com</a>

                    <p class="text-white mb-0 mt-3">Darius Marcell (Director) </p>
                    <a class="link-light " href="mailto:Dariusmarcell@baweraarthamakmur.com">Email : Dariusmarcell@baweraarthamakmur.com</a>

                    <p class="text-white mb-0 mt-3">Devin (Head Of Export Import) </p>
                    <a class="link-light" href="mailto:Alexandrodevin@baweraarthamakmur.com">Email: Alexandrodevin@baweraarthamakmur.com</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="ourValue" class="py-5">

    <div class="container">
        <div class=" row justify-content-center">

            <div class="col-md-8">
                <div data-aos="fade-right" class="row justify-content-evenly ">
                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="px-4 mb-4 d-flex justify-content-center">
                            <img src="{{ asset('images/icon/medal-blue.png') }}" class="img-fluid choose-us-image " alt="">
                        </div>
                        <h4 class="text-center  mb-4">QUALITY</h4>
                        <p class="text-center ">we really care about the standardization given by the importer to us what kind of goods they want </p>
                    </div>
                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="px-4 mb-4 d-flex justify-content-center">
                            <img src="{{ asset('images/icon/solution-blue.png') }}" class="img-fluid choose-us-image " alt="">
                        </div>
                        <h4 class="text-center  mb-4">SOLUTION</h4>
                        <p class="text-center ">We want to be a solution for importers who want to take products from Indonesia </p>
                    </div>
                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="px-4 mb-4 d-flex justify-content-center">
                            <img src="{{ asset('images/icon/clock-blue.png') }}" class="img-fluid choose-us-image " alt="">
                        </div>
                        <h4 class="text-center  mb-4">RESPONSIVE</h4>
                        <p class="text-center ">We have a very responsive team to meet the needs of importers</p>
                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <h2 data-aos="zoom-in" class="blue-700 fw-bold text-md-start text-center">Why Choose Us</h2>
            </div>
        </div>
    </div>

</section>

@endsection
