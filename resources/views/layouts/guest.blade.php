<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('page-title', 'Home')  | {{ config('app.name', 'Coodevo') }}</title>
        <meta property="og:title" content="@yield('og-title', 'Web Development Company | Affordable Web Development Company')" />
        <meta name="Keywords" content="@yield('og-keywords', 'web development, app development, ecommerce solutions, UI/UX design, cloud services, QA testing, WordPress development, dedicated resources, digital transformation, coodevo, custom software development, mobile app development, digital agency, technology partner')" />
        <meta name="Description" content="@yield('og-description', 'Coodevo offers 10+ years of expertise in web and app development, ecommerce solutions, UI/UX design, cloud services, and more. Partner with us to bring your digital projects to life with innovative and reliable technology solutions tailored to your business needs.')" />
        <meta property="og:description" content="@yield('og-description', 'Coodevo offers 10+ years of expertise in web and app development, ecommerce solutions, UI/UX design, cloud services, and more. Partner with us to bring your digital projects to life with innovative and reliable technology solutions tailored to your business needs.')" />
        <meta property="og:image" content="https://www.hubsol.ae/public/upload/cms/57499_web-design.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.coodevo.com" />
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon"/>
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/jos.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/menu.css') }}" />

        @vite(['resources/css/front-app.css', 'resources/js/front-app.js'])
        <style>
            .bg-indigo-500 {
                background-color: rgb(99 102 241) !important;
            }
        </style>
        @stack('styles')
        @livewireStyles
    </head>
    <body class="bg-colorIvory">
        <div class="page-wrapper">

            @include('layouts.partials.header')

            <main class="main-wrapper">
              @yield('content')
            </main>

            @include('layouts.partials.footer')

            @include('layouts.partials.scripts')
        </div>
    </body>
</html>
