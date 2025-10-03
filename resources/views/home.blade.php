<x-app-layout meta-title="Deris Empowerment Initiatives | Collateral-Free Microloans & Community Empowerment"
              meta-description="Empowering underserved rural communities in Nigeria with microloans, financial inclusion, and community-driven development."
              meta-keywords="microloans in Nigeria, collateral-free loans, rural empowerment, financial inclusion, NGO microfinance services">
    <!-- Header End -->

    <!-- Hero Section Start -->
    <x-hero :hero="$hero"></x-hero>
    <!-- Hero Section End -->

    <!-- Features Section Start -->
    <section class="d2c_features_wrapper">
        <div class="container">
            <div class="row">
                @foreach($features as $feature)
                    <x-feature :feature="$feature"></x-feature>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- About Section Start -->
    <x-about-section></x-about-section>
    <!-- About Section End -->

    <!-- Steps Section Start -->
    <section class="d2c_steps_wrappper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h4 class="d2c_sub_title">{{$value->title}}</h4>
                    <h2 class="d2c_title">{{$value->subtitle}}</h2>
                    <p class="d2c_title_content">{{$value->description}}</p>
                </div>
            </div>
            <div class="d2c_steps_wrapp">
                <div class="row">
                    @foreach($taglines as $tagline)
                        @if($tagline->id == 1)
                        <div class="col-md-6 col-lg-3 text-center mb-4">
                            <div class="d2c_steps_number">
                                {{$tagline->position}}
                            </div>
                            <h4>{{$tagline->heading}}</h4>
                            <p>{{$tagline->content}}</p>
                        </div>
                            @elseif($tagline->id == 2)
                            <div  class="col-md-6 col-lg-3 text-center position-relative mb-4">
                                <div class="d2c_number_bottom">
                                    <div class="d2c_steps_number">
                                        {{$tagline->position}}
                                    </div>
                                    <h4>{{$tagline->heading}}</h4>
                                    <p>{{$tagline->content}}</p>
                                </div>
                            </div>

                            @elseif($tagline->id == 3)
                                <div class="col-md-6 col-lg-3 text-center">
                                    <div class="d2c_steps_number">
                                        {{$tagline->position}}
                                    </div>
                                    <h4>{{$tagline->heading}}</h4>
                                    <p>{{$tagline->content}}</p>
                                </div>
                            @else
                                <div  class="col-md-6 col-lg-3 text-center position-relative">
                                    <div class="d2c_number_bottom">
                                        <div class="d2c_steps_number">
                                            {{$tagline->position}}
                                        </div>
                                        <h4>{{$tagline->heading}}</h4>
                                        <p>{{$tagline->content}}</p>
                                    </div>
                                </div>
                            @endif


                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Steps Section End -->

    <!-- Services Section Start -->
    <section class="d2c_services_wrapper d2c_props_bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12 col-xl-5 text-center text-xl-start">
                    <h4 class="d2c_sub_title">{{$service->title}}</h4>
                    <h2 class="d2c_title">{{$service->subtitle}}</h2>
                    <p class="d2c_title_content">{{$service->description}}</p>
                    <a href="/services" class="btn mb-4 mb-md-5 mb-xl-0">view all</a>
                </div>
                <div class="col-md-12 col-xl-7 col-xxl-6">
                    <div class="row">
                        @foreach($features as $feature)
                            <div
                                    @if($feature->order%2 != 0)
                                        class="col-md-6 mt-0 mt-md-4 mb-4 mb-md-0"
                                    @else
                                        class="col-md-6 mb-4"
                                    @endif
                                >
                                    <div class="d2c_card_wrapper text-center">
                                        <img src="/storage/{{$feature->icon}}" class="img-fluid" alt="Services Image">
                                        <div class="d2c_card_body">
                                            <h4 class="d2c_card_title">{{$feature->title}}</h4>
                                            <p>{{$feature->description}}</p>
                                            <a href="/service">Read More</a>
                                        </div>
                                    </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Counter Section Start -->
    <section class="d2c_counter_wrapper">
        <div class="container">
            <div class="row">
                @foreach($achievements as $achievement)
                <div class="col-6 col-lg-3 text-center mb-4 mb-lg-0">
                    <div class="d2c_counter">
                        <h2>{{number_format($achievement->figure)}}<span class="count">+</span></h2>
                        <h4 class="mb-0">{{$achievement->name}}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Pricing Section Start -->
    <!-- Pricing Section End -->

    <!-- Testimonial Section Start -->
    <section class="d2c_testimonial_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h4 class="d2c_sub_title">{{$testimonial->title}}</h4>
                    <h2 class="d2c_title">{{$testimonial->subtitle}}</h2>
                    <p class="d2c_title_content">{{$testimonial->description}}</p>
                </div>
            </div>
            <div class="row d2c_testimonial_slider">
                @foreach($testimonials as $testimonial)
                    <x-testimonial :testimonial="$testimonial"></x-testimonial>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
</x-app-layout>
