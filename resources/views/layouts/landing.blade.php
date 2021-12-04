<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WM4LFMK');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Do the work you love, your way!</title>

    <link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')
    @livewireStyles
</head>
<body class="font-base">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM4LFMK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<div id="app">
    @include('layouts.partials.navbar')

    <div class="pt-12 pb-48 bg-surface-secondary">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                    <!-- Title -->
                    <h1 class="ls-tight font-bolder display-3 mb-7">
                        Everything you need in <span class="text-primary">one place</span>
                    </h1>
                    <!-- Text -->
                    <p class="lead px-lg-16 mb-10">
                        Plan, build and launch beautiful and consistent user interfaces for the web that drives meaningful engagement and growth for your brand.
                        </h1>
                        <!-- Buttons -->
                    <div class="mx-n2">
                        <a href="#" class="btn btn-lg btn-primary shadow-sm mx-2 px-lg-8">
                            Get started
                        </a>
                        <a href="#" class="btn btn-lg btn-white shadow-sm mx-2 px-lg-8">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-8">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">
                    Udyog Aadhar Registration
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('udyamReg.create') }}">
                    Udyam Registration
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('udyogToUdyam.create') }}">
                    Migrate Udyog To Udyam
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('proprietorshipReg.create') }}">
                    Sole Proprietorship Registration
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('GSTReg.create') }}">
                    GST Registration
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('updateReg.create') }}">
                    Update Registration
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('printCert.create') }}">
                    Print Certificate
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('GEMReg.create') }}">
                    Gem Registration
                </a>
            </li>
           
        </ul>
    </div>
    
    <main>
       @yield('content')
    </main>
    {{-- @include('layouts.partials.footer') --}}
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
</body>
</html>
