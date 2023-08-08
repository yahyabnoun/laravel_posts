@extends('layouts.headre')

@section('content')
    <section class="main-content">
        <div class="container-xl post-container">
            {{-- <nav class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="main-home"><span property="itemListElement" typeof="ListItem"><a property="item"
                                typeof="WebPage" title="Go to Katen Sites."
                                href="https://themeger.shop/wordpress/katen" class="main-home"><span
                                    property="name">Katen Sites</span></a>
                            <meta property="position" content="1">
                        </span></li>
                    <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item"
                                typeof="WebPage" title="Go to Katen."
                                href="https://themeger.shop/wordpress/katen/catalog" class="home"><span
                                    property="name">Katen</span></a>
                            <meta property="position" content="2">
                        </span></li>
                    <li class="taxonomy category"><span property="itemListElement" typeof="ListItem"><a
                                property="item" typeof="WebPage" title="Go to the Lifestyle Category archives."
                                href="https://themeger.shop/wordpress/katen/catalog/category/lifestyle/"
                                class="taxonomy category"><span property="name">Lifestyle</span></a>
                            <meta property="position" content="3">
                        </span></li>
                    <li class="post post-post current-item"><span property="itemListElement" typeof="ListItem"><span
                                property="name" class="post post-post current-item">How To Learn Everything About
                                Construction</span>
                            <meta property="url"
                                content="https://themeger.shop/wordpress/katen/catalog/2022/08/30/how-ways-to-learn-everything-about-construction/">
                            <meta property="position" content="4">
                        </span></li>
                </ol>
            </nav> --}}
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="post post-single">
                        <div class="post-header">
                            <h1 class="title mt-0 mb-3">{{ $post->title }}</h1>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item">
                                    <img width="32" height="32"
                                        src="https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-360x360.jpg"
                                        class="avatar avatar-32 photo author" alt="" decoding="async" loading="lazy"
                                        srcset="https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-360x360.jpg 48w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-360x360.jpg 300w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-60x60.jpg 60w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-360x360.jpg 360w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-100x100.jpg 100w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-24x24.jpg 24w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-96x96.jpg 96w"
                                        sizes="(max-width: 32px) 100vw, 32px"> <a
                                        
                                        title="Posts by Yahya bn" rel="author">Yahya bn</a>
                                </li>
                                <li class="list-inline-item"><a
                                        href=" "
                                        rel="category tag">{{ $post->category->name }}</a></li>
                                <li class="list-inline-item"> {{ $carbon::parse( $post->created_at)->Format('F d, Y') }}</li>
                                <li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
                            </ul>
                        </div>
                        <article id="post-47"
                            class="is-single post-content clearfix post-47 post type-post status-publish format-gallery has-post-thumbnail hentry category-lifestyle tag-content tag-image tag-pick post_format-post-format-gallery">
                            <div class="clearfix">
                                {{-- image --}}
       

                                {!!$post->body!!}
                            </div>
                            <hr>
                        </article>



                        <div class="about-author padding-30 rounded">
                            <div class="thumb">
                                <a  >
                                    <img width="300" height="300"
                                        src="https://images.unsplash.com/photo-1615109398623-88346a601842?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
                                        class="avatar avatar-300 photo" alt="" loading="lazy"
                                        srcset="https://images.unsplash.com/photo-1615109398623-88346a601842?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80 300w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-150x150.jpg 150w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-60x60.jpg 60w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-360x360.jpg 360w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-100x100.jpg 100w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-24x24.jpg 24w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-48x48.jpg 48w, https://themeger.shop/wordpress/katen/catalog/wp-content/uploads/sites/7/2022/08/nick-arnot-321267-unsplash-scaled-1-96x96.jpg 96w">
                                </a>
                            </div>
                            <div class="details">
                                <h4 class="name"><a
                                    src='https://images.unsplash.com/photo-1615109398623-88346a601842?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80'
                                       >
                                        Yahya bn</a></h4>
                                <p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and
                                    lifestyle. She helps clients bring the right content to the right people.</p>
                                <ul class="social-icons list-unstyled list-inline mb-0">
                                    <li class="list-inline-item"><a href="https://www.themeger.shop" target="_blank"
                                            rel="noopener" class="fa fa-link"></a></li>
                                    <li class="list-inline-item"><a href="https://facebook.com" target="_blank"
                                            rel="noopener" class="fa-brands fa-facebook"></a></li>
                                    <li class="list-inline-item"><a href="https://instagram.com" target="_blank"
                                            rel="noopener" class="fa-brands fa-instagram"></a></li>
                                    <li class="list-inline-item"><a href="https://linkedin.com" target="_blank"
                                            rel="noopener" class="fa-brands fa-linkedin"></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com" target="_blank"
                                            rel="noopener" class="fa-brands fa-twitter"></a></li>
                                    <li class="list-inline-item"><a href="https://youtube.com" target="_blank"
                                            rel="noopener" class="fa-brands fa-youtube"></a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- next and prevent post  --}}
                        <div class="row nextprev-post-wrapper">
                            <div class="col-md-6 col-12">
                                <div class="nextprev-post prev">
                                    <span class="nextprev-text">Previous Post</span>
                                    <h5 class="post-title"><a
                                            href=" ">
                                            Master The Art Of Nature With These 7 Tips </a></h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-12"></div>
                        </div>
                        {{-- comments  --}}
                        {{-- <div id="respond" class="comment-respond">
                            <div class="section-header">
                                <h3 id="reply-title" class="section-title">Leave a Reply <small><a rel="nofollow"
                                            id="cancel-comment-reply-link"
                                            href="/wordpress/katen/catalog/2022/08/30/how-ways-to-learn-everything-about-construction/#respond"
                                            style="display:none;">Cancel reply</a></small></h3><svg width="33"
                                    height="6" xmlns="http://www.w3.org/2000/svg">
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
                            <form action="https://themeger.shop/wordpress/katen/catalog/wp-comments-post.php"
                                method="post" id="commentform" class="comment-form rounded bordered padding-30"
                                novalidate="">
                                <p class="comment-notes"><span id="email-notes">Your email address will not be
                                        published.</span> <span class="required-field-message">Required fields are
                                        marked <span class="required">*</span></span></p>
                                <p class="comment-form-comment"><label for="comment">Comment <span
                                            class="required">*</span></label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required=""></textarea>
                                </p>
                                <p class="comment-form-author"><label for="author">Name <span
                                            class="required">*</span></label> <input id="author" name="author"
                                        type="text" value="" size="30" maxlength="245"
                                        autocomplete="name" required=""></p>
                                <p class="comment-form-email"><label for="email">Email <span
                                            class="required">*</span></label> <input id="email" name="email"
                                        type="email" value="" size="30" maxlength="100"
                                        aria-describedby="email-notes" autocomplete="email" required=""></p>

                                <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                        name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label
                                        for="wp-comment-cookies-consent">Save my name, email, and website in this
                                        browser for the next time I comment.</label></p>
                                <p class="form-submit"><input name="submit" type="submit" id="submit"
                                        class="submit" value="Post Comment"> <input type="hidden"
                                        name="comment_post_ID" value="47" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p>
                            </form>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    {{-- sidebar  --}}
                    <div class="sidebar">

                        <div id="categories-1" class="widget-odd widget-3 widget rounded widget_categories">
                            @include('layouts.categories')
                        </div>
                        @include('layouts.tags')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
