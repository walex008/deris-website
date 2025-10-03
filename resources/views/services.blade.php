<x-app-layout meta-title="Microloans & Empowerment Services | Deris Empowerment Initiatives"
              meta-description="We provide collateral-free microloans and empowerment services to rural communities in Nigeria, helping individuals achieve financial independence."
              meta-keywords="microloans in Nigeria, collateral-free loans, rural empowerment, financial inclusion, NGO microfinance services">

    <!-- Service Page Banner Start -->
    <section class="d2c_entro_launch_bg">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Service Page Banner End -->

    <!--  Service Offer Section Start -->
    <section class="d2c_mission_wrapper d2c_props_bg d2c_service_offer position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="d2c_content_container pe-0 pe-md-4">
                        <h4>{{$first_section->title}}</h4>
                        <h2>{{$first_section->subtitle}}</h2>
                        <p>{{$first_section->description}}</p>
                        <ul>
                           @foreach($point_list as $point)
                                <li>
                                    <i class="fas fa-check"></i>
                                    {{$point->list_item}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6"></div>
            </div>
        </div>
        <div class="d2c_out_img">
            <img src="/storage/{{$about_section->background_image}}" class="img-fluid" alt="About Mission Image">
        </div>
    </section>
    <!--  Service Offer Section End -->

    <!-- My Service Section Start -->
    <section class="d2c_services_wrapper d2c_my_services">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center">
                    <h4 class="d2c_sub_title">{{$second_section->title}}</h4>
                    <h2 class="d2c_title">{{$second_section->subtitle}}</h2>
                    <p class="d2c_title_content">{{$second_section->description}}</p>
                </div>
            </div>
            <div class="row">
                <!-- 1 -->
                @foreach($features as $feature)
                    <div
                        @if($feature->order%2 != 0)
                            class="col-md-6 col-lg-4 col-xl-3 mb-4"
                        @else
                            class="col-md-6 col-lg-4 col-xl-3 mt-0 mt-xl-4 mb-4 mb-xl-0"
                        @endif
                    >
                        <div class="d2c_card_wrapper text-center">
                            <img src="/storage/{{$feature->icon}}" class="img-fluid" alt="Services Image">
                            <div class="d2c_card_body">
                                <h4 class="d2c_card_title">{{$feature->title}}</h4>
                                <p>{{$feature->description}}</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                        @endforeach
            </div>
        </div>
    </section>
    <!-- My Service Section end -->
</x-app-layout>
