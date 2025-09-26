<x-app-layout>
    <!-- Blog Archive Page Banner Start -->
    <section class="d2c_entro_launch_bg">
        <div class="container">
            <h2 class="text-center">Deris Empowerment Blog</h2>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Blog Archive Page Banner End -->

    <!-- Blog Archive Section Start -->
    <section class="d2c_blog_wrapper d2c_blog_page">
        <div class="container">
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
                       <div class="d2c_blog_btn">
                            <a href="#" id="d2c_blog_more" class="btn mx-auto">
                                load more
                            </a>
                           {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Archive Section End -->
</x-app-layout>
