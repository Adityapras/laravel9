<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }


        .hamburger-active>span:nth-child(1) {
            transform: rotate(28deg);
        }

        .hamburger-active>span:nth-child(2) {
            transform: scale(0);
        }

        .hamburger-active>span:nth-child(3) {
            transform: rotate(-28deg);
        }
    </style>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <nav class="relative px-4 py-4 flex justify-between items-center bg-[#0B0B0B]">
        <div class="text-3xl font-bold leading-none" href="#">
            <button class="navbar-burger flex items-center text-slate-50 p-3">
                <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        {{-- <div class="">
            <button class="navbar-burger flex items-center text-slate-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div> --}}
    </nav>
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-[#010304] border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <svg class="h-12" alt="logo" viewBox="0 0 100 100">
                        <path
                            d="M100 34.2c-.4-2.6-3.3-4-5.3-5.3-3.6-2.4-7.1-4.7-10.7-7.1-8.5-5.7-17.1-11.4-25.6-17.1-2-1.3-4-2.7-6-4-1.4-1-3.3-1-4.8 0-5.7 3.8-11.5 7.7-17.2 11.5L5.2 29C3 30.4.1 31.8 0 34.8c-.1 3.3 0 6.7 0 10v16c0 2.9-.6 6.3 2.1 8.1 6.4 4.4 12.9 8.6 19.4 12.9 8 5.3 16 10.7 24 16 2.2 1.5 4.4 3.1 7.1 1.3 2.3-1.5 4.5-3 6.8-4.5 8.9-5.9 17.8-11.9 26.7-17.8l9.9-6.6c.6-.4 1.3-.8 1.9-1.3 1.4-1 2-2.4 2-4.1V37.3c.1-1.1.2-2.1.1-3.1 0-.1 0 .2 0 0zM54.3 12.3L88 34.8 73 44.9 54.3 32.4V12.3zm-8.6 0v20L27.1 44.8 12 34.8l33.7-22.5zM8.6 42.8L19.3 50 8.6 57.2V42.8zm37.1 44.9L12 65.2l15-10.1 18.6 12.5v20.1zM50 60.2L34.8 50 50 39.8 65.2 50 50 60.2zm4.3 27.5v-20l18.6-12.5 15 10.1-33.6 22.4zm37.1-30.5L80.7 50l10.8-7.2-.1 14.4z">
                        </path>
                    </svg>
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-slate-50 hover:text-slate-600 rounded"
                            href="#">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-slate-50 hover:text-slate-600 rounded"
                            href="#">About Us</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-slate-50 hover:text-slate-600 rounded"
                            href="#">Services</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-slate-50 hover:text-slate-600 rounded"
                            href="#">Pricing</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-slate-50 hover:text-slate-600 rounded"
                            href="#">Contact</a>
                    </li>
                </ul>
            </div>
            {{-- <div class="mt-auto">
                <div class="pt-6">
                    <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl"
                        href="#">Sign in</a>
                    <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl"
                        href="#">Sign Up</a>
                </div>
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2021</span>
                </p>
            </div> --}}
        </nav>
    </div>
   
    {{-- carousel  --}}
    <div class="w-full">
        <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
            <!--Carousel indicators-->
            <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-0 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>
            </div>

            <!--Carousel items-->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!--First item-->
                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                    <img src="https://videos-rockstargames-com.akamaized.net/screencaps/12394/_global/1920.jpg"
                        class="block w-full" alt="..." />
                    <div class="absolute inset-x-[15%] bottom-5 py-5 text-center text-white md:block">
                        <div class="text-xs">Grand Theft Auto Online</div>
                        <div class="lg:text-4xl md:text-4xl sm:text-4xl font-bold">The Vinewood Car Club</div>
                        <button type="button"
                            class="inline-block rounded border-2 border-white px-6 pb-[6px] pt-2 xl:text-md lg:text-md md:text-xs xs:text-xs font-bold uppercase leading-normal text-white transition duration-150 ease-in-out hover:border-white-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-white-600 focus:border-white-600 focus:text-white-600 focus:outline-none focus:ring-0 active:border-white-700 active:text-white-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init>
                            WATCH NOW
                        </button>
                    </div>
                </div>
                <!--Second item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item style="backface-visibility: hidden">
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg" class="block w-full"
                        alt="..." />
                    <div class="absolute inset-x-[15%] bottom-5  py-5 text-center text-white md:block">
                        <div class="text-xs">Grand Theft Auto Online</div>
                        <div class="lg:text-4xl md:text-4xl sm:text-4xl font-bold">The Vinewood Car Club</div>
                        <button type="button"
                            class="inline-block rounded border-2 border-white px-6 pb-[6px] pt-2 xl:text-md lg:text-md md:text-xs xs:text-xs font-bold uppercase leading-normal text-white transition duration-150 ease-in-out hover:border-white-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-white-600 focus:border-white-600 focus:text-white-600 focus:outline-none focus:ring-0 active:border-white-700 active:text-white-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init>
                            WATCH NOW
                        </button>
                    </div>
                </div>
                <!--Third item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item style="backface-visibility: hidden">
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg" class="block w-full"
                        alt="..." />
                    <div class="absolute inset-x-[15%] bottom-5  py-5 text-center text-white md:block">
                        <div class="text-xs">Grand Theft Auto Online</div>
                        <div class="lg:text-4xl md:text-4xl sm:text-4xl font-bold">The Vinewood Car Club</div>
                        <button type="button"
                            class="inline-block rounded border-2 border-white px-6 pb-[6px] pt-2 xl:text-md lg:text-md md:text-xs xs:text-xs font-bold uppercase leading-normal text-white transition duration-150 ease-in-out hover:border-white-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-white-600 focus:border-white-600 focus:text-white-600 focus:outline-none focus:ring-0 active:border-white-700 active:text-white-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init>
                            WATCH NOW
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full pt-14 bg-[#0B0B0B]">
        <div class="w-full px-[70px]">
            <p class="text-3xl text-white font-bold">NewsWire</p>
        </div>
        <div class="w-full xl:px-16 lg:px-16 md:px-8 sm:px-8 xs:px-8 flex flex-wrap bg-[#0B0B0B] justify-start">
            @for ($i = 0; $i < 4; $i++)
                <div class="mb-2 p-2 xl:w-1/3 lg:w-1/3 md:w-1/2 sm:w-full">
                    <div class="rounded-md shadow-md border-2 border-slate-600 overflow-hidden">
                        <img src="{{ $resource['news'][$i] }}" alt="random_image" class="w-full" />
                        <div class="flex justify-between">
                            <h3 class="font-semibold text-xl text-slate-200 mt-5 mb-3 px-2">
                                GTA Online
                            </h3>
                            <div class="text-sm text-slate-400 font-thin mt-5 mb-3 px-2 font-sans ">June 8, 2023</div>
                        </div>
                        <p class="font-medium text-base text-slate-200 px-2 mb-2 text-justify">
                            Experience Improvements Coming To GTA Online
                        </p>
                    </div>
                </div>
            @endfor
        </div>
        <br>
        <p class="mt-4 text-center text-xl font-semibold text-slate-50 underline underline-offset-8">View More</p>
    </div>
    <div class="w-full pt-36 bg-[#0B0B0B]">
        <div class="w-full px-[70px]">
            <p class="text-3xl text-white font-bold">Featured Games</p>
        </div>
        <div class="w-full xl:px-16 lg:px-16 md:px-8 sm:px-8 xs:px-8 flex flex-wrap bg-[#0B0B0B] justify-start">
            @for ($i = 0; $i < 4; $i++)
                <div class="mb-2 p-2 xl:w-1/4 lg:w-1/4 md:w-1/2 sm:w-1/2 xs:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{ $resource['featured'][$i] }}" alt="random_image" class="w-full" />
                    </div>
                </div>
            @endfor
        </div>
        <br>
        <p class="mt-4 text-center text-xl font-semibold text-slate-50 underline underline-offset-8 pb-20">View More
        </p>
    </div>
    <div class="w-full pt-24 bg-[#000000]">
        <div class="w-full px-16">
            <div class="flex w-96 px-2 text-slate-100 text-xl font-semi-bold">
                <div class="w-1/3">Contact</div>
                <div class="w-1/3">Carrers</div>
                <div class="w-1/3">Subscribe</div>
            </div>
        </div>
        <br>
        <div class="w-full px-16 pt-20">
            <div class="flex w-full p-2 justify-center text-slate-400 text-xs font-semibold">
                <div>Corporate&nbsp;&nbsp;</div>
                <div>Privacy&nbsp;&nbsp;</div>
                <div>Cookie Settings&nbsp;&nbsp;</div>
                <div>Do Not Sell My Personal Information</div>
            </div>
        </div>
    </div>
    {{-- end carousel --}}

    @livewireScripts

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>
</body>

</html>
