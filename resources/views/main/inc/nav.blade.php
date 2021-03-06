<nav class="navbar  navbar-expand-lg navbar-light  position-absolute top-0 bg-light w-100">
    <div class="container-fluid justify-content-between  " style="max-width: 90%">

        <a class="navbar-brand" href="{{route('home')}}">
            <img src="/images/icon/icon.png" style="height: 45px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <div class="d-md-flex d-grid my-2 my-md-0">
                <a class="btn btn-primary" href="{{route("pengadaan")}}">Pengadaan Barang</a>
            </div>
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class=" nav-link  fw-bold   @if(Route::is('home'))active @endif" aria-current="page" href="{{Route("home")}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="  fw-bold    nav-link  @if(Route::is('product-categories'))active @endif" href="{{Route("product-categories")}}">PRODUCT</a>
                </li>

                <li class="nav-item">
                    <a class=" fw-bold nav-link @if(Route::is('about-us'))active @endif" href="{{route('about-us')}}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="  fw-bold nav-link @if(Route::is('contact-us'))active @endif" href="{{route("contact-us")}}">CONTACT US</a>
                </li>
                {{-- <li class="nav-item">
            <a class="red-hover nav-link " href="#">KALKULATOR FINANSIAL</a>
          </li> --}}
                {{-- <li class="nav-item">
            <a class="red-hover nav-link " href="#">TENTANG KAMI</a>
          </li> --}}
            </ul>

        </div>

    </div>
</nav>
