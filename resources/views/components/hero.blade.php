<section class="d2c_hero_wrapper text-center text-md-start">
    <div class="container">
        @if($hero != NULL)
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <h1 class="d2c_large_title position-relative">{{$hero->title}} <span>{{$hero->span_word}}</span> {{$hero->subtitle}}</h1>
                <p>{{$hero->description}}</p>
                <a href="/about" class="btn position-relative">Get Started</a>
            </div>
            <div class="col-md-6">
                <div class="d2c_hero_right_wrapper">
                    <div class="d2c_img_wrapper position-relative">
                        <img src="/storage/{{$hero->background_image}}" class="w-100 h-100" alt="Hero Right Image">
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="row align-items-center">
                <h1>No Hero populated</h1>
            </div>
        @endif
    </div>
</section>
