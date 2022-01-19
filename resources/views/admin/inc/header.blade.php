<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0  shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"> <img src="/images/icon/icon.png" style="height: 45px" alt=""></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="w-100"></div>
    <div class="navbar-nav d-md-flex d-block">
        <div class="nav-item text-nowrap">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn nav-link px-3">Sign out</button>
            </form>

        </div>
    </div>
</header>
