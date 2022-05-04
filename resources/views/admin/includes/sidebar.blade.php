<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
            <div class="sidebar-brand-text mx-3">DIVEMASTER</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        @can('isAdmin')
        <!-- Heading -->
        <div class="sidebar-heading">
            Numbers
        </div>

        <!-- Nav Item - Admin Store Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminShop"
               aria-expanded="true" aria-controls="collapseAdminShop">
                <i class="far fa-credit-card text-success"></i>
                <span>Orders</span>
            </a>
            <div id="collapseAdminShop" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-0 m-0 my-1 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('orders.index')}}"><i class="far fa-check-circle pr-3"></i> Orders</a>
                </div>
            </div>
            <div id="collapseAdminShop" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-0 m-0 my-1 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('complete.orders')}}"><i class="far fa-check-circle pr-3"></i> Completed</a>
                </div>
            </div>
            <div id="collapseAdminShop" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-0 m-0 my-1 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('coupons.index')}}"><i class="far fa-check-circle pr-3"></i>Coupons</a>
                </div>
            </div>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
            People
        </div>

        <!-- Nav Item - Users Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users text-primary"></i>
                <span>Users</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded text-decoration-underline">
                    <a class="collapse-item" href="{{route('users.index')}}"><i class="far fa-check-circle pr-3"></i> Users</a>
                </div>
               {{-- <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('roles.index')}}"><i class="far fa-check-circle pr-3"></i>Roles</a>
                </div>--}}
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Products
        </div>

        <!-- Nav Item - Shop Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseShop"
               aria-expanded="true" aria-controls="collapseShop">
                <i class="fas fa-store text-danger"></i>
                <span>Shop</span>
            </a>
            <div id="collapseShop" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('products.index')}}"><i class="far fa-check-circle pr-3"></i> Products</a>
                </div>
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('brands.index')}}"><i class="far fa-check-circle pr-3"></i> Brands</a>
                </div>
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('productcategories.index')}}"><i class="far fa-check-circle pr-3"></i> Categories</a>
                </div>
            </div>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
            Rating
        </div>

        <!-- Nav Item - Reviews Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReview"
               aria-expanded="true" aria-controls="collapseReview">
                <i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i>
                <span>Reviews</span>
            </a>
            <div id="collapseReview" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('reviews.index')}}"><i class="far fa-check-circle pr-3"></i> Reviews</a>
                </div>
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('reviewreplies.index')}}"><i class="far fa-check-circle pr-3"></i> Replies</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Reviews Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
               aria-expanded="true" aria-controls="collapseBlog">
                <i class="fas fa-blog text-info"></i>
                <span>Blog</span>
            </a>
            <div id="collapseBlog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('posts.index')}}"><i class="far fa-check-circle pr-3"></i> Posts</a>
                </div>
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('postcategories.index')}}"><i class="far fa-check-circle pr-3"></i> Categories</a>
                </div>
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="https://disqus.com/by/thomasdemeulenaere/" target="_blank"><i class="far fa-check-circle pr-3"></i> Comments</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Heading -->
        <div class="sidebar-heading">
            Potential
        </div>

        <!-- Nav Item - Shop Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProspects"
               aria-expanded="true" aria-controls="collapseProspects">
                <i class="fas fa-fingerprint text-dark"></i>
                <span>ContactForm</span>
            </a>
            <div id="collapseProspects" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white m-0  my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('prospects.index')}}"><i class="far fa-check-circle pr-3"></i> Prospects</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Heading -->
        <div class="sidebar-heading">
            Newsletter
        </div>

        <!-- Nav Item - Shop Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNewsletter"
               aria-expanded="true" aria-controls="collapseNewsletter">
                <i class="far fa-newspaper"></i>
                <span>Newsletter</span>
            </a>
            <div id="collapseNewsletter" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('newsletters.index')}}"><i class="far fa-check-circle pr-3"></i> Newsletters</a>
                </div>
                <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('readers.index')}}"><i class="far fa-check-circle pr-3"></i> Readers</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


    <!-- Sidebar Message -->
    <div class="sidebar-card">
        <i class="fas fa-question-circle fa-3x mb-2"></i>
        <p class="text-center mb-2">Divemaster helpdesk is there for you 24/7</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Help me</a>
    </div>

    @endcan

    @can('isCustomer')
        <!-- Heading -->
            <div class="sidebar-heading">
                Numbers
            </div>

            <!-- Nav Item - Admin Store Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminShop"
                   aria-expanded="true" aria-controls="collapseAdminShop">
                    <i class="far fa-credit-card text-success"></i>
                    <span>Orders</span>
                </a>
                <div id="collapseAdminShop" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('orders.index')}}"><i class="far fa-check-circle pr-3"></i> Orders</a>
                    </div>
                    <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('complete.orders')}}"><i class="far fa-check-circle pr-3"></i> Completed</a>
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                People
            </div>

            <!-- Nav Item - Users Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users text-primary"></i>
                    <span>My Account</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white m-0 my-1 p-0 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('users.index')}}"><i class="far fa-check-circle pr-3"></i> User</a>
                    </div>
                    {{-- <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="{{route('roles.index')}}"><i class="far fa-check-circle pr-3"></i>Roles</a>
                     </div>--}}
                </div>
            </li>

    @endcan


        <!-- End of Sidebar -->
    </ul>



