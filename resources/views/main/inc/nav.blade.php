<nav class="navbar  navbar-expand-lg navbar-light  position-absolute top-0 bg-light w-100">
    <div class="container-fluid justify-content-between  " style="max-width: 90%">
  
      <a class="navbar-brand" href="">
        <img src="/images/icon/icon.png" style="height: 45px" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse flex-md-grow-0 me-4  navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class=" nav-link  fw-bold   @if(Route::is('home'))active @endif" aria-current="page"
              href="{{Route("home")}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="  fw-bold    nav-link  @if(Route::is('products-page'))active @endif" href="{{Route("products-page")}}">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a class=" fw-bold nav-link   href="#eventSection">GALLERY</a>
          </li>
          <li class="nav-item">
            <a class=" fw-bold nav-link @if(Route::is('about-us'))active @endif"   href="{{route('about-us')}}">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="  fw-bold nav-link   href="#articleSection">CONTACT US</a>
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