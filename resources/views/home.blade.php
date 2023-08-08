@extends('layouts.headre')


@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="97" class="elementor elementor-97">


        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-0253e39 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="0253e39" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">

                {{-- premiumPost --}}
                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-bcfecc1"
                    data-id="bcfecc1" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b038539 elementor-widget elementor-widget-katen-post-one"
                            data-id="b038539" data-element_type="widget" data-widget_type="katen-post-one.default">
                            <div class="elementor-widget-container">
                                <div class="post featured-post-lg">
                                    <div class="details clearfix">
                                        <a href="" class="category-badge">Inspiration</a>
                                        <h2 class="post-title">
                                            <a href="">5 Easy Ways You Can Turn Future Into Success</a>
                                        </h2>
                                        <ul class="meta list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="" title="Posts byYahya bn"
                                                    rel="author">{{ $premiumPost->admin->name }}</a>
                                            </li>
                                            {{-- <li class="list-inline-item">August 20, 2022</li> --}}
                                            {{-- <li class="list-inline-item">{{ $premiumPost->created_at }}</li> --}}
                                            <li class="list-inline-item">
                                                {{ $carbon::parse($premiumPost->created_at)->Format('F d, Y') }}</li>
                                        </ul>
                                    </div>
                                    <a href="">
                                        <div class="thumb rounded">
                                            <div class="inner data-bg-image"
                                                data-bg-image="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/08/grant-ritchie-1154815-unsplash-750x540.jpg"
                                                style="
                              background-image: url('https://themeger.shop/wordpress/katen/wp-content/uploads/2022/08/grant-ritchie-1154815-unsplash-750x540.jpg');
                            ">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Popular Posts --}}
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4f7eef9"
                    data-id="4f7eef9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-347771e elementor-widget elementor-widget-katen-post-six"
                            data-id="347771e" data-element_type="widget" data-widget_type="katen-post-six.default">
                            <div class="elementor-widget-container">
                                <div class="post-tabs rounded bordered">
                                    <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button aria-controls="popular" aria-selected="true" class="nav-link active"
                                                data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab"
                                                role="tab" type="button">
                                                Popular
                                            </button>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="postsTabContent">
                                        <div class="lds-dual-ring"></div>
                                        <div aria-labelledby="popular-tab" class="tab-pane fade active show"
                                            id="popularpost" role="tabpanel">
                                            @foreach ($popularPosts as $popularPost)
                                                <div class="post post-list-sm circle ">
                                                    <div class="thumb circle">
                                                        <a href=" ">
                                                            <div class="inner">
                                                                <img loading="lazy" width="60" height="60"
                                                                    src="{{ asset('storage/'.$popularPost->photo) }}"
                                                                    class="attachment-katen-thumb-circle size-katen-thumb-circle wp-post-image"
                                                                    alt="" decoding="async" {{-- sizes="(max-width: 60px) 100vw, 60px"  --}} />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="details clearfix">
                                                        <h6 class="post-title my-0">
                                                            <a href="{{ route('posts.show', ['id' =>$popularPost->id   , 'category'=> $popularPost->category->name ]) }} ">
                                                                {{-- 3 Easy Ways To Make Your iPhone Faster --}}

                                                                {{ $popularPost->title }}
                                                            </a>
                                                        </h6>
                                                        <ul class="meta list-inline mt-1 mb-0">
                                                            <li class="list-inline-item">
                                                                {{ $carbon::parse($popularPost->created_at)->Format('F d, Y') }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>

        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-591a006 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="591a006" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-4ed0109"
                    data-id="4ed0109" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">

                        <div class="elementor-element elementor-element-aafc924 elementor-widget elementor-widget-katen-section-header"
                            data-id="aafc924" data-element_type="widget" data-widget_type="katen-section-header.default">
                            <div class="elementor-widget-container">
                                <div class="section-header">
                                    <h3 class="section-title">Latest Posts</h3>
                                    <svg width="33" height="6" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%"
                                                y2="0%">
                                                <stop offset="0%" stop-color="#FE4F70"></stop>
                                                <stop offset="100%" stop-color="#FFA387"></stop>
                                            </linearGradient>
                                        </defs>
                                        <path
                                            d="M33 1c-3.3 0-3.3 4-6.598 4C23.1 5 23.1 1 19.8 1c-3.3 0-3.3 4-6.599 4-3.3 0-3.3-4-6.6-4S3.303 5 0 5"
                                            stroke="url(#gradient)" stroke-width="2" fill="none"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        {{-- posts  --}}
                        <div class="elementor-element elementor-element-7a20ed9 elementor-widget elementor-widget-katen-post-five"
                            data-id="7a20ed9" data-element_type="widget" data-widget_type="katen-post-five.default">
                            <div class="elementor-widget-container">
                                <div class="padding-30 rounded bordered">
                                    <div id="allpostsdiv" class="row infinite-wrapper ">

                                        @foreach ($posts as $post)
                                            <div class="col-md-12 col-sm-6 post-list-item post-item allpostclass">
                                                <div class="post post-list clearfix">
                                                    <div class="thumb rounded">

                                                        <div class="inner">
                                                            <a
                                                                href="https://themeger.shop/wordpress/katen/blog/2022/08/23/60-things-to-immediately-do-about-building/"><img
                                                                    width="600" height="250"
                                                                    style="width: 600px!important"
                                                                    src="{{ asset('storage/'.$post->photo) }}"
                                                                    class="attachment-katen-thumb-list size-katen-thumb-list wp-post-image"
                                                                    alt="" decoding="async" loading="lazy" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="details clearfix">
                                                        <ul class="meta list-inline mb-3">
                                                            <li class="list-inline-item">
                                                                <img width="32" height="32"
                                                                    src="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/08/nick-arnot-321267-unsplash-48x48.jpg"
                                                                    class="avatar avatar-32 photo author" alt=""
                                                                    decoding="async" loading="lazy"
                                                                    sizes="(max-width: 32px) 100vw, 32px" />
                                                                <a href="" title="Posts by Yahya bn"
                                                                    rel="author">Yahya bn</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="">{{ $post->category->name }}</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                {{ $carbon::parse($post->created_at)->Format('F d, Y') }}
                                                            </li>
                                                        </ul>
                                                        <h5 class="post-title">
                                                            <a href=" {{ route('posts.show', $post->id) }} ">
                                                                {{ $post->title }}</a>
                                                        </h5>
                                                        <p class="excerpt mb-0">
                                                            The European languages are members of the same
                                                            family. Their separate existence is a myth.…
                                                        </p>
                                                        <div class="post-bottom clearfix d-flex align-items-center">
                                                            <div class="social-share me-auto">
                                                                <button class="toggle-button icon-share"></button>
                                                            </div>
                                                            <div class="more-button float-end">
                                                                <a
                                                                    href="https://themeger.shop/wordpress/katen/blog/2022/08/23/60-things-to-immediately-do-about-building/"><span
                                                                        class="icon-options"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>

                                    <div class="pagination-seperator text-center">
                                        <a id="loadmorebtn" class="btn btn-simple">
                                            Load more </a>
                                        {{-- {{ $posts->links()   }} --}}

                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                {{-- categories and tags  --}}
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0f6bc09"
                    data-id="0f6bc09" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-e53429e elementor-widget elementor-widget-sidebar"
                            data-id="e53429e" data-element_type="widget" data-widget_type="sidebar.default">
                            <div class="elementor-widget-container">

                                <!-- categories  -->
                                <div id="categories-2" class="widget-odd widget-3 widget rounded widget_categories">
                                    @include('layouts.categories')
                                </div>
                                <!-- tags  -->

                                @include('layouts.tags')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
 