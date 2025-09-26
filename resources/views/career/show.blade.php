<x-app-layout>
    <!-- Blog Details Banner Section Start -->
    <section class="d2c_entro_launch_bg">
        <div class="container">
            <h2 class="text-center">{{$career->title}}</h2>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/career">Career</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$career->title}}</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Blog Details Banner Section End -->

    <!-- Blog Details Section Start -->
    <section class="d2c_blog_details_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <span class="d2c_blog_date">{{ Carbon\Carbon::parse($career->published_at)->format('d F, Y') }} </span>
                    <h2>{{$career->title}}</h2>
                    <div>{!! str($career->description)->sanitizeHtml() !!}</div>
                    <div class="d2c_blog_social">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <h6 class="mb-0 text-center text-lg-start">Social Media</h6>
                            </div>
                            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end">
                                <ul class="list-group list-group-horizontal">
                                    @foreach($socials as $social)
                                        <li>
                                            <a href="{{$social->url}}" target="_blank" class="d2c_social_icon"><i class="{{$social->icon}}"></i></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d2c_blog_details_right">
                    <div class="d2c_post_archive">
                        <h6>Related Posts</h6>
                        @foreach($posts as $post)
                            <div class="d2c_post_wrapper">
                                <span>{{ Carbon\Carbon::parse($post->published_at)->format('d-F') }}</span>
                                <a href="{{route('show', $post)}}">{{$post->title}}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="d2c_single_c2a text-center">
                        <h4>Do you need help to boost business next level?</h4>
                        <a href="/contact" class="btn secondary_btn">Contact us</a>
                    </div>

                    <div class="d2c_tag_wrapper">
                        <h6>tags</h6>
                        {{--                        <a href="#" class="d2c_tag_btn">Finance</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Service Section End -->
</x-app-layout>
