@extends('layouts.main')
@section('content')
    <style>
        .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
        }
    </style>
    {{-- Carousel  --}}
    <div id="default-carousel" class="relative top-[60px] w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-[500px] lg:mx-11">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/random/900×700/?fruit"
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/random/900×700/?nature"
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/random/900×700/?music"
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/random/900×700/?programming"
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/random/900×700/?computer"
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3">
            <button type="button" class="h-3 w-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        {{-- <button type="button"
            class="absolute md:mx-11 top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute md:mx-11 top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button> --}}
    </div>
    {{-- Caruosel  --}}

    {{-- Promo Section --}}
    <section class="mt-16 w-full max-w-full">
        <div class="w-full py-[35px] lg:px-[100px]">
            <div
                class="h-[384px] max-w-[340px] rounded-bl-[100px] rounded-tr-[100px] bg-[#f11f28] pl-8 pt-16 lg:max-w-[426px] lg:pl-10">
                <div class="text-xs font-normal text-white lg:text-sm">
                    Berakhir Dalam :
                </div>
                <div class="pt-5 text-xl font-semibold text-white lg:text-3xl">
                    Penawaran <br>
                    Spesial
                </div>
                <div class="max-w-[100px] pt-2 text-xs font-thin text-white lg:max-w-[250px] lg:text-sm">
                    Temukan berbagai penawaran menarik untuk pelanggan setia Telkomsel.
                </div>
            </div>

            <div class="hide-scroll-bar -mt-[330px] flex w-full space-x-5 overflow-x-scroll pl-44 lg:pl-72">
                <div class="inline-block">
                    <div
                        class="inline-block h-80 w-[200px] max-w-[200px] flex-nowrap overflow-hidden rounded-t-3xl rounded-br-3xl bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:max-w-[220px]">
                        <a href="#">
                            <img class="mb-2 h-40 rounded-t-2xl"
                                src="https://source.unsplash.com/random/900x600/?smartphone" alt="" />
                        </a>
                        <div class="ml-4">
                            <a href="#">
                                <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">
                                    MyTelkomsel</h5>
                            </a>
                            <p class="over mb-16 font-bold text-gray-700 dark:text-gray-400 lg:mb-16">Stamp Berhadiah
                            </p>
                            <a href="#" class="">
                                <svg class="-ml-2 h-3.5 w-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block">
                    <div
                        class="inline-block h-80 w-[200px] max-w-[200px] flex-nowrap overflow-hidden rounded-t-3xl rounded-br-3xl bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:max-w-[220px]">
                        <a href="#">
                            <img class="mb-2 h-40 rounded-t-2xl" src="https://source.unsplash.com/random/900x600/?computer"
                                alt="" />
                        </a>
                        <div class="ml-4">
                            <a href="#">
                                <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">
                                    MyTelkomsel</h5>
                            </a>
                            <p class="over mb-16 font-bold text-gray-700 dark:text-gray-400 lg:mb-16">Stamp Berhadiah
                            </p>
                            <a href="#" class="">
                                <svg class="-ml-2 h-3.5 w-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block">
                    <div
                        class="inline-block h-80 w-[200px] max-w-[200px] flex-nowrap overflow-hidden rounded-t-3xl rounded-br-3xl bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:max-w-[220px]">
                        <a href="#">
                            <img class="mb-2 h-40 rounded-t-2xl" src="https://source.unsplash.com/random/900x600/?sciene"
                                alt="" />
                        </a>
                        <div class="ml-4">
                            <a href="#">
                                <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">
                                    MyTelkomsel</h5>
                            </a>
                            <p class="over mb-16 font-bold text-gray-700 dark:text-gray-400 lg:mb-16">Stamp Berhadiah
                            </p>
                            <a href="#" class="">
                                <svg class="-ml-2 h-3.5 w-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block">
                    <div
                        class="inline-block h-80 w-[200px] max-w-[200px] flex-nowrap overflow-hidden rounded-t-3xl rounded-br-3xl bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:max-w-[220px]">
                        <a href="#">
                            <img class="mb-2 h-40 rounded-t-2xl" src="https://source.unsplash.com/random/900x600/?nature"
                                alt="" />
                        </a>
                        <div class="ml-4">
                            <a href="#">
                                <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">
                                    MyTelkomsel</h5>
                            </a>
                            <p class="over mb-16 font-bold text-gray-700 dark:text-gray-400 lg:mb-16">Stamp Berhadiah
                            </p>
                            <a href="#" class="">
                                <svg class="-ml-2 h-3.5 w-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block">
                    <div
                        class="inline-block h-80 w-[200px] max-w-[200px] flex-nowrap overflow-hidden rounded-t-3xl rounded-br-3xl bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:max-w-[220px]">
                        <a href="#">
                            <img class="mb-2 h-40 rounded-t-2xl"
                                src="https://source.unsplash.com/random/900x600/?campaign" alt="" />
                        </a>
                        <div class="ml-4">
                            <a href="#">
                                <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">
                                    MyTelkomsel</h5>
                            </a>
                            <p class="over mb-16 font-bold text-gray-700 dark:text-gray-400 lg:mb-16">Stamp Berhadiah
                            </p>
                            <a href="#" class="">
                                <svg class="-ml-2 h-3.5 w-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block">
                    <div
                        class="inline-block h-80 w-[200px] max-w-[200px] flex-nowrap overflow-hidden rounded-t-3xl rounded-br-3xl bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:max-w-[220px]">
                        <a href="#">
                            <img class="mb-2 h-40 rounded-t-2xl" src="https://source.unsplash.com/random/900x600/?sciene"
                                alt="" />
                        </a>
                        <div class="ml-4">
                            <a href="#">
                                <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">
                                    MyTelkomsel</h5>
                            </a>
                            <p class="over mb-16 font-bold text-gray-700 dark:text-gray-400 lg:mb-16">Stamp Berhadiah
                            </p>
                            <a href="#" class="">
                                <svg class="-ml-2 h-3.5 w-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block">
                    <div
                        class="inline-block h-80 w-[200px] max-w-[200px] flex-nowrap overflow-hidden rounded-t-3xl rounded-br-3xl bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:max-w-[220px]">
                        <a href="#">
                            <img class="mb-2 h-40 rounded-t-2xl"
                                src="https://source.unsplash.com/random/900x600/?smartphone" alt="" />
                        </a>
                        <div class="ml-4">
                            <a href="#">
                                <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">
                                    MyTelkomsel</h5>
                            </a>
                            <p class="over mb-16 font-bold text-gray-700 dark:text-gray-400 lg:mb-16">Stamp Berhadiah
                            </p>
                            <a href="#" class="">
                                <svg class="-ml-2 h-3.5 w-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block">
                    <div
                        class="inline-block h-80 w-[200px] max-w-[200px] flex-nowrap overflow-hidden rounded-t-3xl rounded-br-3xl bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 lg:max-w-[220px]">
                        <a href="#">
                            <img class="mb-2 h-40 rounded-t-2xl"
                                src="https://source.unsplash.com/random/900x600/?smartphone" alt="" />
                        </a>
                        <div class="ml-4">
                            <a href="#">
                                <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">
                                    MyTelkomsel</h5>
                            </a>
                            <p class="over mb-16 font-bold text-gray-700 dark:text-gray-400 lg:mb-16">Stamp Berhadiah
                            </p>
                            <a href="#" class="">
                                <svg class="-ml-2 h-3.5 w-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- End Promo Section  --}}

    {{-- Todo  --}}
    <section class="mt-16 w-full">
        <div class="mb-5 text-center text-2xl font-bold text-slate-800">Yang bisa dilakukan di Telkomsel.com</div>
        <div class="mx-auto flex w-full max-w-[1090px] flex-wrap p-4">
            <a href="#"
                class="w-1/4 border-r-2 border-r-slate-400 pb-1 pt-4 text-center transition duration-300 ease-in-out hover:border-b-4 hover:border-b-red-600 lg:pt-10">
                <img class="inline h-10 lg:h-16"
                    src="https://www.telkomsel.com/sites/default/files/service-icon/2022-06/isi-pulsa.png" alt="">
                <div class="mt-2 text-xs font-semibold text-slate-700 lg:text-xl">
                    Beli Pulsa/Paket
                </div>
            </a>
            <a href="#"
                class="w-1/4 border-r-2 border-r-slate-400 pb-1 pt-4 text-center transition duration-300 ease-in-out hover:border-b-4 hover:border-b-red-600 lg:pt-10">
                <img class="inline h-10 lg:h-16"
                    src="https://www.telkomsel.com/sites/default/files/service-icon/2023-07/Revisi-Belanja-NEW.gif"
                    alt="">
                <div class="mt-2 text-xs font-semibold text-slate-700 lg:text-xl">
                    Belanja
                </div>
            </a>
            <a href="#"
                class="w-1/4 border-r-2 border-r-slate-400 pb-1 pt-4 text-center transition duration-300 ease-in-out hover:border-b-4 hover:border-b-red-600 lg:pt-10">
                <img class="inline h-10 lg:h-16"
                    src="https://www.telkomsel.com/sites/default/files/service-icon/2023-08/grapari-online-newicon2--64px.png"
                    alt="">
                <div class="mt-2 text-xs font-semibold text-slate-700 lg:text-xl">
                    GraPARI Online
                </div>
            </a>
            <a href="#"
                class="w-1/4 pb-1 pt-4 text-center transition duration-300 ease-in-out hover:border-b-4 hover:border-b-red-600 lg:pt-10">
                <img class="inline h-10 lg:h-16"
                    src="https://www.telkomsel.com/sites/default/files/service-icon/2022-06/undi-undi-hepi.png"
                    alt="">
                <div class="mt-2 text-xs font-semibold text-slate-700 lg:text-xl">
                    Undi-Undi Hepi
                </div>
            </a>
        </div>
    </section>
    {{-- end Todo --}}

    {{-- hero  --}}
    <section class="w-full max-w-full bg-slate-700 py-10 lg:px-24">
        <div class="flex w-full max-w-full flex-wrap bg-lime-500">
            <div class="w-full bg-red-400 p-2 lg:w-1/2">
                Gambar Disini
            </div>
            <div class="w-full bg-red-600 p-2 lg:w-1/2">
                <h4>Telkomsel PraBayar</h4>
                <h2>
                    Satu produk, beragam pilihan paket
                </h2>
                <p>
                    Menawarkan pilihan paket yang dapat disesuaikan untuk gaya hidup digital dengan mudah, fleksibel, dan
                    tanpa batasan.
                </p>
            </div>
        </div>
    </section>
    {{-- end hero  --}}
@endsection
