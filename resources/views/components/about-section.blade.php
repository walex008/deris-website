@if($about != NULL)
    <section class="d2c_about_wrapper d2c_props_bg position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-md-6 col-lg-12 text-center text-md-start">
                            <h4 class="d2c_sub_title">{{$about->title}}</h4>
                            <h2 class="d2c_title pe-0 pe-md-5">{{$about->subtitle}}</h2>
                            <p class="d2c_title_content">{{$about->description}}</p>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <ul class="nav mb-3" id="pills-tab-one" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill" data-bs-target="#pills-mission" type="button" role="tab" aria-controls="pills-mission" aria-selected="true">Mission</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-vission-tab" data-bs-toggle="pill" data-bs-target="#pills-vission" type="button" role="tab" aria-controls="pills-vission" aria-selected="false">Vision</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tab-oneContent">
                                <div class="tab-pane fade show active" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab">
                                    <p>{{$about->mission}}</p>
                                    <ul>
                                        @foreach($mission_list as $point)
                                            <li>
                                                <i class="fas fa-check"></i>
                                                {{$point->list_item}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-vission" role="tabpanel" aria-labelledby="pills-vission-tab">
                                    <p>{{$about->vision}}</p>
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
                            <a href="{{$about->cta_primary_link}}" class="btn mt-md-3 mt-xl-4">{{$about->cta_primary_text}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <a href="{{$about->cta_secondary_link}}" target="_blank" class="d2c_video_wrapper">
                        <i class="far fa-play-circle"></i>
                        <h6 class="mb-0">{{$about->cta_secondary_text}}</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="d2c_out_img">
            <img src="/storage/{{$about->background_image}}" class="img-fluid" alt="About Image">
        </div>
    </section>
@else
    <section class="d2c_about_me_wrapper d2c_props_bg position-relative">
        <div>
            <h1>No content for about us section yet!</h1>
        </div>
    </section>
@endif
