<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark pink darken-4">

    <!-- Navbar brand -->
    <a class="navbar-brand text-uppercase" href="{{ url('/dashboard') }}">Dashboard</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
        aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent2">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown mega-dropdown">
                <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Conversation</a>
                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                    aria-labelledby="navbarDropdownMenuLink3">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 sub-menu mb-0">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Books</h6>
                            <ul class="list-unstyled">

                                <li>
                                    <a href="{{ url('/dashboard/import/job/overdrive') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>General
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown mega-dropdown">
                <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Collections</a>
                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                    aria-labelledby="navbarDropdownMenuLink3">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 sub-menu mb-0">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Books</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ url('/dashboard/all-books') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>All Books
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dashboard/new/all-books') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>All New Books
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dashboard/import/job/overdrive') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Group's Most Popular Books
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dashboard/import/job/overdrive') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Martin Books
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xl-4 sub-menu mb-0">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Users</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ url('/dashboard/user/wishlist-books') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Wishlist Books
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dashboard/user/recently-books') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Recently Books
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dashboard/user/recently-view-books') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Recently View Books
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Technology -->
            @if(Auth::user()->id == 1)
            <li class="nav-item dropdown mega-dropdown">
                <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Admin</a>
                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                    aria-labelledby="navbarDropdownMenuLink3">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 sub-menu mb-0">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Books</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="menu-item pl-0" type="button" data-toggle="modal"
                                        data-target="#import_book">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Import Book URL
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dashboard/import/job/overdrive') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Json Book Overdrive
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dashboard/display/overdrive') }}" class="menu-item pl-0">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Import Book Overdrive
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            @endif


        </ul>
        <!-- Links -->



    </div>
    <!-- Collapsible content -->

</nav>
<!-- Navbar -->