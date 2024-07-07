<div>

    <body class="blog_version">

        <!--================ Start Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="text-center banner_content">
                        <h2>Blog</h2>
                        <div class="page_link">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('blog') }}">Our Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Banner Area =================-->

        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area section_gap_top">
            <div class="container">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-lg-4">
                            <div class="categories_post">
                                <img src="{{ $category->imageUrl }}" alt="post">
                                <div class="categories_details">
                                    <div class="categories_text">
                                        <a href="#">
                                            <h5>{{ $category->name }}</h5>
                                        </a>
                                        <div class="border_line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            @foreach ($posts as $post)
                                <article class="row blog_item">
                                    <div class="col-md-3">
                                        <div class="text-right blog_info">
                                            <div class="post_tag">

                                            </div>
                                            <ul class="blog_meta list">
                                                <li><a href="#">{{ $post->category->name }}<i
                                                            class="lnr lnr-briefcase"></i></a></li>
                                                <li><a href="#">{{ $post->user->name }}<i
                                                            class="lnr lnr-user"></i></a></li>
                                                <li><a href="#">{{ $post->publishedDateFormatted() }}<i
                                                            class="lnr lnr-calendar-full"></i></a>
                                                </li>
                                                <li><a href="#">{{ $post->views }}<i class="lnr lnr-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="blog_post">
                                            <img src="{{ $post->imageUrl }}" alt="">
                                            <div class="blog_details">
                                                <a href="{{ route('single-post', $post->slug) }}">
                                                    <h2>{{ $post->getShortTitle() }}</h2>
                                                </a>
                                                <p>{!! $post->getAbstract() !!}</p>
                                                <a href="{{ route('single-post', $post->slug) }}"
                                                    class="primary_btn"><span>View
                                                        More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach

                            <nav class="blog-pagination justify-content-center d-flex">
                                {{ $posts->links('pagination::bootstrap-4') }}

                            </nav>
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

                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>

                                @foreach ($popularPosts as $post)
                                    <div class="media post_item">
                                        <img src="{{ $post->imageUrl }}" alt="{{ $post->title }}"
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
                                                    aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Enter email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>
                                <p class="text-bottom">You can unsubscribe at any time</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    @foreach ($tags as $tag)
                                        <li><a href="#">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->


    </body>
</div>
