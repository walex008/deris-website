<x-app-layout meta-title="About Deris Empowerment Initiatives | Our Mission & Impact"
              meta-description="Learn about Deris Empowerment Initiatives—our mission, vision, and commitment to empowering underserved communities in Nigeria through microloans and sustainable support."
              meta-keywords="About Deris Empowerment, NGO Nigeria, microfinance NGO, rural empowerment Nigeria, financial inclusion NGO">

    <!-- About Banner Section Start -->
    <section class="d2c_entro_launch_bg">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- About Banner Section End -->

    <!-- About Me Section Start -->
    <section class="d2c_about_me_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center">
                    <h4>{{$about->heading}}</h4>
                    <h2>{{$about->sub_heading}}</h2>
                    <p>{{$about->short_description}}</p>
                </div>
                <div class="d2c_img_wrapper">
                    <img src="/storage/{{$about->banner_image}}" class="w-100 h-100" alt="About Me Image">
                </div>
                <div class="col-lg-10 offset-lg-1 text-center">
                    <p class="mb-0">{{$about->content}}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Me Section End -->

    <!-- About Mission Section Start -->
    <section class="d2c_mission_wrapper d2c_props_bg position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <div class="d2c_content_container pe-4">
                        <h4>{{$about->mission_title}}</h4>
                        <h2>{{$about->mission_summary}}</h2>
                        <p>{{$about->mission_content}}</p>
                        <ul>
                            @foreach($mission_list as $point)
                                <li>
                                    <i class="fas fa-check"></i>
                                    {{$point->list_item}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="https://www.youtube.com/derisempower" target="_blank" class="d2c_video_wrapper">
                        <i class="far fa-play-circle"></i>
                        <h6 class="mb-0">Watch Video</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="d2c_out_img">
            <img src="/storage/{{$about->mission_image}}" class="img-fluid" alt="About Mission Image">
        </div>
    </section>
    <!-- About Mission Section End -->

    <!-- About Vission Section Start -->
    <section class="d2c_vission_wrapper position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6"></div>
                <div class="col-12 col-lg-6">
                    <div class="d2c_content_container">
                        <h4>{{$about->vision_title}}</h4>
                        <h2>{{$about->vision_summary}}</h2>
                        <p>{{$about->vision_content}}</p>
                        <ul>
                            @foreach($vision_list as $point)
                                <li>
                                    <i class="fas fa-check"></i>
                                    {{$point->list_item}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="d2c_container_img">
            <img src="/storage/{{$about->vision_image}}" class="img-fluid" alt="About Vission Image">
        </div>
    </section>
    <!-- About Vission Section End -->
</x-app-layout>
