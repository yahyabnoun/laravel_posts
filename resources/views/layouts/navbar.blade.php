<header class="header-default">
    <nav class="navbar navbar-expand-lg">
        <div class="container-xl">

            <!-- logos  -->
            <a href="{{route('home')}}" class="navbar-brand logo-dark"><img
                    src="{{asset('storage/images/yahya-dark.png')}}" alt="Katen" 
                    width="118" height="26"  /></a>
                    <a href="{{route('home')}}"
                class="navbar-brand logo-light"><img
                    src="{{asset('storage/images/yahya-light.png')}}"  alt="Katen"
                    width="118" height="26" /></a>


            <div class="collapse navbar-collapse">
                {{-- navbar list --}}
                <ul id="menu-main-menu" class="navbar-nav mr-auto">
                    <li id="menu-item-30"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children dropdown nav-item nav-item-30">
                        {{-- active class qui style le tag /a/  --}}
                        <a href="{{route('home')}}" class="nav-link  {{Route::is('home')  ? 'active' :'' }} " aria-haspopup="true"
                            aria-expanded="false">Home</a>
                        <ul class="dropdown-menu depth_0">
                            <li id="menu-item-196"
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home nav-item nav-item-196">
                                <a href=""
                                    class="dropdown-item active">Magazine</a>
                            </li>
                            <li id="menu-item-197"
                                class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-197">
                                <a href=""
                                    class="dropdown-item">Personal</a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-119"
                        class="katen-megamenu menu-item menu-item-type-taxonomy menu-item-object-category nav-item nav-item-119">
                        <a href=" " class="nav-link {{Request::is('posts/', '*/Politic')  ? 'active' :'' }}"> Politic </a>
                    </li>
                    <li id="menu-item-119"
                        class="katen-megamenu menu-item menu-item-type-taxonomy menu-item-object-category nav-item nav-item-119">
                        <a href=" " class="nav-link {{Request::is('posts/', '*/Celebration')  ? 'active' :'' }}"> Celebration </a>
                    </li>
                    <li id="menu-item-119"
                        class="katen-megamenu menu-item menu-item-type-taxonomy menu-item-object-category nav-item nav-item-119">
                        <a href=" " class="nav-link {{Request::is('posts/', '*/Culture')  ? 'active' :'' }}"> Culture </a>
                    </li>
                    <li id="menu-item-119"
                    class="katen-megamenu menu-item menu-item-type-taxonomy menu-item-object-category nav-item nav-item-119">
                    <a href=" " class="nav-link {{Request::is('posts/', '*/Fashion')  ? 'active' :'' }}"> Fashion </a>
                </li>
                </ul>
            </div>

            <!-- search and icons social media -->
            <div class="header-right">
                <ul class="social-icons list-unstyled list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="" target="_blank">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <div class="header-buttons">
                    <button class="search icon-button">
                        <i class="icon-magnifier"></i>
                    </button>
                    <button class="burger-menu icon-button">
                        <span class="burger-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
