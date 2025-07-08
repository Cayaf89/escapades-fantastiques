<header class="">
    <div class="container lg:max-w-3xl xl:max-w-5xl 2xl:max-w-7xl mx-auto px-6 md:px-0 flex items-center justify-between">
        <a class="py-6 text-2xl font-bold text-white" href="{{ home_url('/') }}">
            {!! $siteName !!}
        </a>

        @if (has_nav_menu('primary_navigation'))
            <!-- Desktop navigation -->
            <nav class="nav-primary hidden md:block !text-white"
                 aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'nav flex items-center space-x-4 text-xl font-bold',
                    'echo' => false,
                ]) !!}
            </nav>

            <!-- Mobile navigation -->
            <div class="block lg:hidden">
                <a href="" class="hamburger text-white">
                    <svg class="size-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <g id="Menu / Hamburger_MD">
                            <path id="Vector" d="M5 17H19M5 12H19M5 7H19" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>

                <div class="nav-container hidden flex-col absolute top-0 left-0 z-50 w-full p-6 bg-white text-black">
                    <div class="flex items-center justify-between mb-8">
                        <a class="text-2xl font-bold text-black" href="{{ home_url('/') }}">
                            {!! $siteName !!}
                        </a>
                        <a href="" class="hamburger">
                            <svg class="size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15">
                                <path d="M3.64 2.27L7.5 6.13L11.34 2.29C11.5114 2.1076 11.7497 2.0029 12 2C12.5523 2 13 2.4477 13 3C13.0047 3.2478 12.907 3.4866 12.73 3.66L8.84 7.5L12.73 11.39C12.8948 11.5512 12.9915 11.7696 13 12C13 12.5523 12.5523 13 12 13C11.7423 13.0107 11.492 12.9127 11.31 12.73L7.5 8.87L3.65 12.72C3.4793 12.8963 3.2453 12.9971 3 13C2.4477 13 2 12.5523 2 12C1.9953 11.7522 2.093 11.5134 2.27 11.34L6.16 7.5L2.27 3.61C2.1052 3.4488 2.0085 3.2304 2 3C2 2.4477 2.4477 2 3 2C3.2404 2.0029 3.4701 2.0998 3.64 2.27Z"></path>
                            </svg>
                        </a>
                    </div>

                    {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'nav-mobile flex flex-col text-xl font-bold',
                        'echo' => false,
                    ]) !!}
                </div>
            </div>
        @endif
    </div>
</header>
