<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @can('isAdmin')
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <form class="d-flex" action="{{action('App\Http\Controllers\AdminProductsController@search_item')}}" method="post">
                @csrf
                <input name="searchbar" type="text" class="form-control" placeholder="Search for Products...">
                <button class="btn btn-dark" type="submit">Search</button>
            </form>

            <a class="nav-link collapsed mx-auto" href="#" data-toggle="collapse" data-target="#collapseReports"
               aria-expanded="true" aria-controls="collapseReports">
                <span class="badge badge-dark rounded text-white m-2 p-2 d-flex align-items-center">Reports<i class="fas fa-business-time mx-2 fa-2x "></i></span>
            </a>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="d-flex align-items-center mx-2">
                    <a href="https://mailtrap.io/inboxes" target="_blank"><i class="far fa-envelope fa-2x text-dark"></i></a>
                </div>
                <div class="d-flex align-items-center mx-2">
                    <a href="{{route('faqs.index')}}"><i class="far fa-question-circle fa-2x text-dark"></i></a>
                </div>
                <div class="d-flex align-items-center mx-2">
                    <a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=dbdivemaster" target="_blank"><i class="fas fa-database fa-2x text-dark"></i></a>
                </div>
                <div class="d-flex align-items-center mx-2">
                    <a href="https://www.mollie.com/dashboard/org_12427948/payments" target="_blank"><i class="far fa-money-bill-alt fa-2x text-dark "></i></a>
                </div>


                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @if(Auth::user()->avatar == null)
                        <img class="rounded-circle mx-2" height="40" width="40" src="{{Auth::user()->photo ? asset('images/users') . Auth::user()->photo->file : 'http://placehold.it/62x62' }}" alt="{{Auth::user()->name}}">
                        {{ Auth::user()->name }}
                        @else
                            <img class="rounded-circle mx-2" height="40" width="40" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}">
                            {{ Auth::user()->name }}
                        @endif
                    </a>

                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            <i class="fas fa-sign-out-alt mx-3"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none bg-dark">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
        @endcan

        @can('isCustomer')
            <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(Auth::user()->avatar == null)
                                    <img class="rounded-circle mx-2" height="40" width="40" src="{{Auth::user()->photo ? asset('images/users') . Auth::user()->photo->file : 'http://placehold.it/62x62' }}" alt="{{Auth::user()->name}}">
                                    {{ Auth::user()->name }}
                                @else
                                    <img class="rounded-circle mx-2" height="40" width="40" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}">
                                    {{ Auth::user()->name }}
                                @endif
                            </a>

                            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    <i class="fas fa-sign-out-alt mx-3"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none bg-dark">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
        @endcan




        <!-- Begin Page Content -->
        <div class="container-fluid">



