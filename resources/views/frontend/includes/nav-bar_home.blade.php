<body>
<header class="container-fluid">
    <section class="row">
        <nav class="navbar navbar-expand-md bg-white pe-0 py-4">
            <div class="col-lg-10 offset-lg-1 d-md-flex justify-content-md-around align-items-center px-0">
                <a class="navbar-brand ps-0 ps-lg-2 mx-3 py-0" id="logotitle">DIVEMASTER</a>
                <img class="d-none d-md-block" height="62" width="62" src="{{asset('images/frontend/divemask.PNG')}}" alt="divemask">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-3 ms-lg-0 d-lg-flex justify-content-lg-center"
                     id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link active pb-1 mx-2" href="{{route('home')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-1 mx-2" href="{{route('shop')}}">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-1 mx-2" href="{{route('about')}}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-1 mx-2" href="{{route('contact')}}">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-1 mx-2" href="{{route('blog')}}">BLOG</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link pb-1 mx-2 bg-dark text-white fw-bold mx-4 d-flex align-items-center" href="{{route('loginpage')}}">
                                    <i class="fas fa-power-off fa-2x mx-1"></i>SIGN IN</a>
                            </li>
                        @endguest
                    </ul>
                </div>
                @auth()
                    <div id="tools" class="d-flex justify-content-center">
                        @livewire('cart-show')
                        <a class="d-none d-lg-block" href="{{route('wishlist')}}">
                        <span class="badge badge-danger shadow my-2 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16"
                                 fill="currentColor"
                                 class="bi bi-heart-fill me-1"
                                 viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>{{Session::has('list') ? Session::get('list')->totalQuantity: '0'}}</span></a>
                    </div>
                @endauth
            </div>
        </nav>
    </section>
    <section id="headerimg" class="row">
        <div class="d-flex flex-column">
            <div id="imagediving" class="row img-fluid mx-0">
                <img class=" px-0 mb-3" src="{{asset('images/frontend/diving.jpg')}}" alt="">
            </div>
        </div>
    </section>
</header>
