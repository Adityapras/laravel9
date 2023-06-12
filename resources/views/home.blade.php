@extends('layouts.app')
@section('content')
    <div class="w-full">
        <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
            <!--Carousel indicators-->
            <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-0 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active
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
                        <a href="{{ url('videos/333') }}" target="_blank" type="button"
                            class="inline-block rounded border-2 border-white px-6 pb-[6px] pt-2 xl:text-md lg:text-md md:text-xs xs:text-xs font-bold uppercase leading-normal text-white transition duration-150 ease-in-out hover:border-white-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-white-600 focus:border-white-600 focus:text-white-600 focus:outline-none focus:ring-0 active:border-white-700 active:text-white-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init>
                            WATCH NOW
                        </a>
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
@endsection
