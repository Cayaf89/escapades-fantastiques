<footer class="w-full bg-beige pt-12 md:pt-16 pb-8 px-6 md:px-0">
    <div class="container mx-auto flex flex-col items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col space-y-6 md:border-r-2 md:border-r-black md:pr-12">
                <div class="text-3xl font-bold !no-underline text-center md:text-left">
                    {!! $siteName !!}
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
