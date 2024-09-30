@extends('main_layout')
@section('dynamic')

    {{-- Filter DIV and Search OPEN--}}
    <div class="filter-search items-center flex-col md:flex-row flex justify-between md:px-14 px-10 sm:w-full z-50  h-16 mt-5">
        <div class="filter flex items-center relative md:right-0 right-3">
            <h1 class="filter-text mr-2 text-sm md:text-md font-bold"><i class="ri-filter-3-line pr-1"></i>Filter</h1>
            <form class="max-w-full flex text-gray-900 border rounded px-2 py-1" action="{{ route('filter') }}" method="GET">
                @csrf
                <button class="mx-3 text-green-700 hover:underline text-sm md:text-base" type="submit" name="newest">Most Recent</button>
                <button class="mx-3 text-red-700 hover:underline text-sm md:text-base" type="submit" name="oldest">Oldest</button>
            </form>
        </div>
        <div class="search">
            <form action="" action="get">
                <input placeholder="Search " class="focus:bg-slate-200 transition-all outline-1 py-0 md:py-1 font-condensed font-bold text-lg rounded px-2 w-48 md:w-96 border-b border-red-500 bg-transparent" type="search" name="search" />
                <button type="submit" class="hover:bg-red-600 hover:text-white transition-all rounded-full" ><i class="text-lg md:text-2xl px-2 ri-search-line"></i></button>
            </form>
        </div>
    </div>
    {{-- Filter DIV and Search END--}}

    {{-- News View Open--}}
    <span class="flex justify-between mx-10 mt-5">
        <div class="back">
        <i class="text-xl ri-home-4-line"></i><a href="{{ url('/') }}" class=" underline hover:no-underline text-lg"> Home</a>
        </div>
    </span>
    @foreach ($search as $post)
    @if($post)
    <div class="container h-auto w-full">
        <div class="news-container border border-slate-600 w-11/12 h-60 md:w-11/12 rounded-md mx-auto mt-5 px-2 flex justify-between md:items-center items-start md:h-44">
            <div class="left-wrapper md:w-3/4 w-4/6 px-3 flex flex-col justify-between h-full py-5">
                <div class="heading">
                    <a href="{{ route('read-post',$post->id) }}" class="post hover:underline">
                    <h1 class="title font-extrabold font-condensed text-xl md:text-2xl uppercase text-wrap text-slate-900">{{ $post->title }}</h1>
                    </a>

                <h5 class="font-condensed md:text-base capitalize font-bold text-gray-600 text-md">
                <button data-tooltip-target="tooltip-default" data-tooltip-placement="bottom" type="button" class="lowercase underline mb-3">{{ $post->author }} </button>
                <i class="ri-verified-badge-line text-rose-600 text-sm"></i></h5>
                <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Developer, Author and Admin of Unblurred platform.
                <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                    <p class="text-slate-800 text-md">
                    @php
                     echo substr($post->article,0,139).'.....'; 
                    @endphp
                    <a href="{{ route('read-post',$post->id) }}" class="underline text-red-600 hover:text-red-600 hover:no-underline">Read more</a></p>
                </div>
            </div>

            <div class="right-wrapper py-2">
                <div class="mini-image px-2">
                    <a href="{{ route('read-post',$post->id) }}">
                        <img src="{{ asset('images/'.$post->image) }}" alt="mini-image" class="md:w-40 w-36 md:h-32 h-36 object-cover object-center shadow-lg transition-all hover:shadow-red-600 shadow-slate-700 rounded-lg my-5" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <div class="flex justify-center items-center w-screen relative mt-5 text-center">{{ $search->links() }}</div>
@endsection
