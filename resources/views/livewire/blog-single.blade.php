<div>

    <body class="blog_version">

        <!--================ Start Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="text-center banner_content">
                        <h2>Blog Details</h2>
                        <div class="page_link">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('blog') }}">Blog</a>
                            <a href="#">Blog Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Banner Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="{{ $post->getImageLink() }}" alt="{{ $post->title }}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="text-right blog_info">
                                    <ul class="blog_meta list">
                                        <li><a href="#">{{ $post->category->name }}<i
                                                    class="lnr lnr-briefcase"></i></a>
                                        </li>
                                        <li><a href="#">{{ $post->user->name }}<i class="lnr lnr-user"></i></a>
                                        </li>
                                        <li><a href="#">{{ $post->publishedDateFormatted() }}<i
                                                    class="lnr lnr-calendar-full"></i></a>
                                        </li>
                                        <li><a href="#">{{ $post->views }}<i class="lnr lnr-eye"></i></a>
                                        </li>

                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2>{{ $post->title }}</h2>
                                {!! $post->content !!}

                            </div>

                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div
                                    class="flex-row col-lg-6 col-md-6 col-12 nav-left d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="img/blog/prev.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="text-white lnr lnr-arrow-left"></span></a>
                                    </div>
                                    @if ($prevPost != null)
                                        <div class="detials">
                                            <p>Prev Post</p>
                                            <a href="{{ route('single-post', $prevPost->slug) }}">
                                                <h4>{{ $prevPost->title }}</h4>
                                            </a>
                                        </div>
                                    @endif

                                </div>
                                <div
                                    class="flex-row col-lg-6 col-md-6 col-12 nav-right d-flex justify-content-end align-items-center">
                                    @if ($nextPost)
                                        <div class="detials">
                                            <p>Next Post</p>
                                            <a href="{{ route('single-post', $nextPost->slug) }}">
                                                <h4>{{ $nextPost->title }}</h4>
                                            </a>
                                        </div>
                                    @endif

                                    <div class="arrow">
                                        <a href="#"><span class="text-white lnr lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="img/blog/next.jpg"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i
                                                class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">

                                <h4>written by {{ $post->user->name }}</h4>


                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>

                                @foreach ($popularPosts as $post)
                                    <div class="media post_item">
                                        <img src="{{ $post->getImageLink() }}" alt="{{ $post->title }}"
                                            style="width: 100px;">
                                        <div class="media-body">
                                            <a href="{{ route('single-post', $post->slug) }}">
                                                <h3>{{ $post->title }}</h3>
                                            </a>
                                            <p>{{ $post->humanReadablePublishedDate() }}</p>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="#" class="d-flex justify-content-between">
                                                <p>{{ $category->name }}</p>
                                                <p>{{ $category->posts_count }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <p>
                                    Here, I focus on a range of items and features that we use in life without
                                    giving them a second thought.
                                </p>
                                <div class="flex-row form-group d-flex">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Enter email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>
                                <p class="text-bottom">You can unsubscribe at any time</p>

                            </aside>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->


    </body>
</div>
