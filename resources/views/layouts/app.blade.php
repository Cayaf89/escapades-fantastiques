<!doctype html>
<html @php(language_attributes())>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @php(body_class())>
@php(wp_body_open())

<div id="app" class="relative">
    <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
    </a>

    @include('sections.header')

    <main id="main" class="main parallax pt-32 md:pt-28 pb-12">
        @yield('content')
    </main>

    @hasSection('sidebar')
        <aside class="sidebar">
            @yield('sidebar')
        </aside>
    @endif

    @include('sections.footer')
</div>

@php(do_action('get_footer'))
@php(wp_footer())

</body>
</html>
