<footer class="w-full bg-beige pt-12 md:pt-16 pb-8 px-6 md:px-0">
    <div class="container mx-auto flex flex-col items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col space-y-6 md:border-r-2 md:border-r-black md:pr-12">
                <div class="text-3xl font-bold !no-underline text-center md:text-left">
                    {!! $siteName !!}
                </div>
                <div>
                    <a href="tel:0648587569" class="grid grid-cols-[minmax(0,max-content)_minmax(0,max-content)] items-center text-sm md:text-base mb-4">
                        <svg class="size-4 md:size-6 mr-4" width="24" height="24" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 12C22 10.6868 21.7413 9.38647 21.2388 8.1731C20.7362 6.95996 19.9997 5.85742 19.0711 4.92896C18.1425 4.00024 17.0401 3.26367 15.8268 2.76123C14.6136 2.25854 13.3132 2 12 2V4C13.0506 4 14.0909 4.20703 15.0615 4.60889C16.0321 5.01099 16.914 5.60034 17.6569 6.34326C18.3997 7.08594 18.989 7.96802 19.391 8.93848C19.7931 9.90918 20 10.9495 20 12H22Z"
                                  fill="currentColor"></path>
                            <path d="M2 10V5C2 4.44775 2.44772 4 3 4H8C8.55228 4 9 4.44775 9 5V9C9 9.55225 8.55228 10 8 10H6C6 14.4182 9.58173 18 14 18V16C14 15.4478 14.4477 15 15 15H19C19.5523 15 20 15.4478 20 16V21C20 21.5522 19.5523 22 19 22H14C7.37259 22 2 16.6274 2 10Z"
                                  fill="currentColor"></path>
                            <path d="M17.5433 9.70386C17.8448 10.4319 18 11.2122 18 12H16.2C16.2 11.4485 16.0914 10.9023 15.8803 10.3928C15.6692 9.88306 15.3599 9.42017 14.9698 9.03027C14.5798 8.64014 14.1169 8.33081 13.6073 8.11963C13.0977 7.90869 12.5515 7.80005 12 7.80005V6C12.7879 6 13.5681 6.15527 14.2961 6.45679C15.024 6.7583 15.6855 7.2002 16.2426 7.75732C16.7998 8.31445 17.2418 8.97583 17.5433 9.70386Z"
                                  fill="currentColor"></path>
                        </svg>
                        06 48 58 75 69
                    </a>
                    <a href="mailto:commercial@escapadesfantastiques.com" class="grid grid-cols-[minmax(0,max-content)_minmax(0,max-content)] items-center text-sm md:text-base">
                        <svg class="size-4 md:size-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill="currentColor" fill-rule="evenodd"
                                  d="M7.172,11.334 L10.0016129,13.2687863 L12.73,11.387 L18.844647,17.4201015 C18.6835279,17.47198 18.5117028,17.5 18.3333333,17.5 L1.66666667,17.5 C1.44656147,17.5 1.23642159,17.4573334 1.04406658,17.3798199 L7.172,11.334 Z M20,6.376 L20,15.8333333 C20,16.0799316 19.9464441,16.3140212 19.8503291,16.5246054 L13.856,10.611 L20,6.376 Z M0,6.429 L6.042,10.561 L0.105700422,16.4187119 C0.0373700357,16.2365871 1.90096522e-15,16.0393243 1.77635684e-15,15.8333333 L0,6.429 Z M18.3333333,2.5 C19.2538079,2.5 20,3.24619208 20,4.16666667 L20,4.753 L9.99838709,11.6476481 L0,4.81 L1.77635684e-15,4.16666667 C1.66363121e-15,3.24619208 0.746192084,2.5 1.66666667,2.5 L18.3333333,2.5 Z"></path>
                        </svg>
                        commercial@escapadesfantastiques.com
                    </a>
                </div>
                <div class="flex flex-col mb-4">
                    <div class="md:text-lg font-medium md:font-bold mb-2">
                        Suivez les Escapades Fantastiques sur :
                    </div>
                    <div class="flex items-center justify-center md:justify-start space-x-4">
                        <a href="https://www.youtube.com/channel/UC2GXZso7BWO-q5z9f9NLwsQ/" target="_blank">
                            <img src="{{ Vite::asset('resources/images/icons/icon-youtube.png') }}" alt=""
                                 class="size-8">
                        </a>
{{--                        <a href="https://www.instagram.com/escapadesfantastiques/" target="_blank">--}}
{{--                            <img src="{{ Vite::asset('resources/images/icons/icon-instagram.png') }}" alt=""--}}
{{--                                 class="size-8">--}}
{{--                        </a>--}}
                        <a href="https://www.facebook.com/lesescapadesfantastiques/" target="_blank">
                            <img src="{{ Vite::asset('resources/images/icons/icon-facebook.png') }}" alt=""
                                 class="size-8">
                        </a>
                        <a href="https://x.com/hervegourdet" target="_blank">
                            <img src="{{ Vite::asset('resources/images/icons/icon-x.png') }}" alt=""
                                 class="size-8">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex items-center md:pl-12">
                {!! wp_nav_menu([
                    'menu' => 6,
                    'menu_class' => 'chevron-right flex flex-col space-y-4 text-lg font-bold [&_a]:!no-underline',
                    'echo' => false,
                ]) !!}
            </div>
        </div>
        <div class="flex flex-col md:flex-row space-x-0 md:space-x-4 space-y-2 md:space-y-0 items-center justify-center mt-6">
            <a href="/wp-content/uploads/2025/07/Dossier-de-presse.pdf" target="_blank" class="whitespace-nowrap">
                Dossier de presse
            </a>
            <a href="/politique-de-confidentialite/" class="whitespace-nowrap">
                Politique de confidentialité
            </a>
        </div>
        <div class="flex items-center justify-center text-center mt-8">
            © {{ date('Y') }} Hervé Gourdet. Droits de reproduction réservés
        </div>
    </div>
</footer>
