<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-blue-700 sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            {{-- <li class="nav-item @if(Route::is('dashboard'))active @endif">
                <a class="nav-link fs-5" aria-current=" page" href="{{route("dashboard")}}">
            Dashboard
            </a>
            </li> --}}
            <li class="nav-item @if(Route::is('admin-categories'))active @endif">
                <a class="nav-link fs-5" aria-current="page" href="{{route("admin-categories")}}">
                    Categories
                </a>
            </li>
            <li class="nav-item @if(Route::is('admin-products'))active @endif ">
                <a class="nav-link fs-5" aria-current="page" href="{{route("admin-products")}}">
                    Products
                </a>
            </li>

        </ul>
    </div>
</nav>
