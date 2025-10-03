
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Deafult Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$metaTitle}}</title>
    <meta name="description" content="{{$metaDescription}}" />
    <meta name="keywords" content="{{$metaKeywords}}" />

    <!-- Open Graph (Social Sharing) -->
    <meta property="og:title" content="{{$metaTitle}}" />
    <meta property="og:description" content="{{$metaDescription}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://derisempowerment.org/" />
    <meta property="og:image" content="{{asset('/assets/images/deris_logo.png')}}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{$metaTitle}}" />
    <meta name="twitter:description" content="{{$metaDescription}}" />
    <meta name="twitter:image" content="{{asset('/assets/images/deris_logo.png')}}" />
    <!-- Favicon -->
    <link rel="icon" id="favicon" href="{{asset('/assets/images/favicon.png')}}" type="image/gif" sizes="16x16">
    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <!-- Font Awesome 5 CDN/ Icon Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Fancybox Image Gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <!-- Slider CSS Link -->
    <link rel="stylesheet" href="{{url('./lib/slick-1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" href="{{url('./lib/slick-1.8.1/slick/slick-theme.css')}}">
    <!-- Bootstarp 5 CSS Link -->
    <link rel="stylesheet" href="{{url('./lib/bootstrap-5/css/bootstrap.min.css')}}">
    <!-- Main CSS Link -->
    <link rel="stylesheet" href="{{url('./assets/css/style.css')}}">
    <!-- Responsive CSS Link -->
    <link rel="stylesheet" href="{{url('./assets/css/responsive.css')}}">
</head>
<body>
<!-- Home Page Start -->

<!--  Preloader Start  -->
<div class="preloader">
    <img src="{{asset('/assets/images/deris logo new.png')}}" alt="Preloader Logo">
</div>
<!--  Preloader End  -->

<!-- Header Start -->
<header class="d2c_navbar sticky-top">
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" id="d2c_main_nav">
            <!-- Logo -->
            <a class="navbar-brand" href="/"><img src="{{asset('/assets/images/deris_logo.png')}}" class="w-100" alt="Logo"></a>
            <!-- Logo -->

            <!-- HamBurger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars"></i></span>
            </button>
            <!-- HamBurger -->

            <!-- Nav Item -->
            <div class="collapse navbar-collapse js-clone-nav justify-content-between">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/service">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/career">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link" href="#">Sign up</a>
                    </li>
                </ul>
                <div class="d2c_nav_btn d-none d-lg-block">
                    <a href="./pages/authentication/login.html" class="nav-link d-inline-block">Login</a>
                    <a href="./pages/authentication/registration.html" class="btn">Sign up</a>
                </div>
            </div>
            <!-- Nav Item -->
        </nav>
        <!-- Navbar -->

        <!-- Tab And Mobile View -->
        <div class="collapse navbar-collapse d2c_mobile_view" id="navbarSupportedContent">
            <div class="show_width container">
                <div class="text-right">
                    <button class="navbar-toggler d2c_cross_btn p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span><i class="fa fa-times"></i></span>
                    </button>
                </div>

                <div class="navbar d2c_mobile_view_body"></div>
            </div>
        </div>
        <!-- Tab And Mobile View -->
    </div>
</header>


{{$slot}}


<!-- Call To Action Section Start -->
<section class="d2c_c2a_wrapper">
    <x-donate></x-donate>
</section>
<!-- Call To Action Section End -->

<!-- Blog Section Start -->
<section class="d2c_blog_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h4 class="d2c_sub_title">{{$blog->title}}</h4>
                <h2 class="d2c_title">{{$blog->subtitle}}</h2>
                <p class="d2c_title_content">{{$blog->description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-6 blog mb-4">
                            <div class="d2c_card_wrapper">
                                <div class="d2c_date">
                                    <h6>{{ Carbon\Carbon::parse($post->published_at)->format('d-M') }}</h6>
                                </div>
                                @foreach($post->categories as $category)
                                    <span>{{$category->title}}</span>
                                @endforeach
                                <h4 class="d2c_card_title">
                                    <a href="{{route('show', $post)}}">{{$post->title}}</a>
                                </h4>
                                <p class="mb-0">{{$post->shortBody()}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/blog" class="btn">view More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Footer Section Start -->
<footer class="d2c_footer_wrapper d2c_entro_launch_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-4 mb-4 mb-lg-0">
                <a href="/"><img src="/storage/{{$footer->logo}}" alt="Footer Logo"></a>
                <p class="mb-0">{{$footer->description}}</p>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                <div class="d2c_contact_details">
                    <h6>Get In Touch</h6>
                    <div class="d2c_info_wrapper d-flex align-items-center">
                        <a href="tel:{{$footer->phone}}" class="d2c_social_icon"><i class="fas fa-phone-alt"></i></a>
                        <p class="mb-0">+234{{$footer->phone}}</p>
                    </div>
                    <div class="d2c_info_wrapper d-flex align-items-center">
                        <a href="mailto:{{$footer->email}}" class="d2c_social_icon"><i class="fas fa-envelope"></i></a>
                        <p class="mb-0">{{$footer->email}}</p>
                    </div>
                    <div class="d2c_info_wrapper d-flex align-items-center">
                        <a href="#" target="_blank" class="d2c_social_icon"><i class="fas fa-map-marker-alt"></i></a>
                        <p class="mb-0">{{$footer->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="d2c_footer_newsletter">
                    <h6>Social Media</h6>
                    <ul class="list-group list-group-horizontal">
                        @foreach($socials as $social)
                        <li>
                            <a href="{{$social->url}}" target="_blank" class="d2c_social_icon"><i class="{{$social->icon}}"></i></a>
                        </li>
                        @endforeach
                    </ul>
                    <h6 class="mb-4">Newsletter</h6>
                    <form class="needs-validation" novalidate>
                        <div class="input-group h-100">
                            <input type="email" class="form-control" placeholder="Enter your email here" aria-describedby="newsletter_btn" autocomplete="on" required>
                            <button class="btn" type="submit" id="newsletter_btn"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Copy Right Start -->
    <div class="container">
        <div class="d2c_copy_right_wrapper">
            <p class="mb-0 text-center">Copyright &copy; {{ now()->year }} <a href="https://naijasabi.org/" target="_blank" class="d2c_link">Naijasabi Tech</a>. All Rights Reserved.</p>
        </div>
    </div>
    <!-- Copy Right End -->
</footer>
<!-- Footer Section End -->

<!-- Scroll Button Start -->
<div id="scrollBtn" class="d2c_scroll_btn">
    <a href="#">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- Scroll Button  End -->

<!-- Home Page End -->



<!-- Main JS CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 5 JS Link -->
<script src="./lib/bootstrap-5/js/bootstrap.bundle.min.js"></script>
<!-- Fancybox Image Gallery JS CDN -->
<script  src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<!-- Slider JS Link -->
<script src="{{url('./lib/slick-1.8.1/slick/slick.min.js')}}"></script>
<!-- Main JS Link -->
<script src="{{url('./assets/js/main.js')}}"></script>
</body>
</html>

