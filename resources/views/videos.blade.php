@extends('layouts.app')
{{-- bg-[#0B0B0B] --}}
@section('content')
    <div class="w-full xl:h-[768px] lg:h-[768px] md:h-[768px] sm:h-[768px] bg-lime-300">
        <video controls>
            <source
                src="https://videos-rockstargames-com.akamaized.net/v3/V-08a60c20aaa8bb657fc610ea606724f4bb8bfd96-en_us-1080p.mp4"
                type="video/mp4">
        </video>
    </div>
    <div
        class="w-full xl:px-16 lg:px-16 md:px-16 sm:px-8 xs:px-8 xl:pt-36 lg:pt-36 md:pt-36 sm:pt-2 xs:pt-2 xl:pb-10 lg:pb-10 md:pb-10 sm:pb-2 xs:pb-2 bg-[#0B0B0B]">
        <div class="flex items-center">
            <div class="xl:text-lg lg:text-lg md:text-md sm:text-xs xs:text-xs font-semibold text-slate-50">Grand Theft Auto
                Online &nbsp;&nbsp;&nbsp;</div>
            <div class="text-sm font-thin text-slate-50">June 9, 2023</div>
        </div>
    </div>
    <div class="w-full xl:px-16 lg:px-16 md:px-16 sm:px-8 xs:px-8 sm:mx-auto bg-[#0B0B0B]">
        <div>
            <div class="xl:text-4xl lg:text-4xl md:text-3xl sm:text-3xl xs:text-3xl font-bold text-slate-50">The Vinewood Car Club &nbsp;&nbsp;&nbsp;</div>
            <p class="xl:text-xl lg:text-xl md:text-xl sm:text-sm xs:text-sm text-slate-50 justify-center">Introducing The Vinewood Car Club — a members-only destination
                and
                the inaugural offering from The Vinewood Club — the new premium service in Los Santos for GTA+ Members,
                artfully recycling the glamor and sophistication of Vinewood’s glory days into a contemporary brand to be
                enjoyed around the world!</p>
        </div>
    </div>
@endsection
