@extends('main_layout')
@section('dynamic')

<br />
    <span class="flex justify-between mx-5 md:mx-10 mb-4">
        <div class="back">
        <i class="text-xl ri-arrow-left-line"></i><a href="{{ url('/') }}" class=" hover:no-underline underline text-lg"> Back</a>
        </div>
        <div class="share">
        <a href="#share" id="copyBtn"><i class="inline-block text-gray-800 hover:text-red-600 transition-all hover:rotate-6 hover:scale-110 ease-in duration-600 ri-share-forward-2-fill text-2xl md:text-3xl mx-2"></i></a>
        </div>
    </span>


    @foreach ($post as $each)
    @if($each)
    <div  id="top" class="container h-auto w-11/12 text-center mx-16 flex flex-col relative md:left-0 -left-12 justify-center items-center">
        <div class="title">
            <h1 class="md:px-10 px-1 text-3xl md:text-5xl font-extrabold text-slate-900" >{{ $each->title }}</h1>
            <h5 class="font-condensed md:text-xl capitalize font-bold mt-3 text-gray-600 text-md"><button data-tooltip-target="tooltip-default" data-tooltip-placement="bottom" type="button" class="underline">{{ $each->author }} </button><i class="ri-verified-badge-line text-rose-600"></i></h5>
            <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Developer, Author and Admin of Unblurred.
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
        <div class="misc">
            <ul class="text-gray-700 flex md:w-96 text-sm mt-2 justify-around w-72 flex-row items-center font-bold">
                <li class="date text-md md:text-base"><i class="ri-calendar-line mr-1"></i>{{ $each->created_at }}</li>
            </ul>
        </div>
        <div class="cover-image flex flex-col justify-center items-center">
            <img src="{{ asset('images/'.$each->image) }}" alt="article-image" class="md:w-5/6 object-cover object-center shadow-lg shadow-zinc-700 rounded-lg my-5" />
            <p class="text-gray-800 position -top-10 text-sm  md:text-base ">Credit: {{ $each->credit }}</p>
        </div>

        <div class="post my-2 text-left">
            <p class=" text-base md:text-xl first-letter:text-5xl text-slate-950">
                {!! $each->article !!}
            </p>
        </div>

        <br />
    </div>
    <div class="top font-bold bg-slate-900 text-white w-8 h-8 md:w-12 md:h-12 text-base md:text-xl flex justify-center items-center right-5 bottom-12 z-50 p-1 fixed rounded-full text-center">
        <a href="#top"><i class="ri-arrow-up-double-fill"></i></a>
    </div>

            <div class="right-wrapper flex flex-col justify-between text-center items-center h-full py-2 md:py-4">
                <div class="reference w-5/6 px-3 md:px-5 bg-zinc-200 rounded-lg h-56 flex justify-center items-center flex-col">
                    <h1 class="uppercase font-extrabold text-lg sm:text-xl md:text-2xl mb-2" href="#"><p>References<i class="ri-link"></i></p></h1>
                    <ul class="fact_links font-condensed ">
                    @php
                        $explode = explode(',',$each->references);
                    @endphp
                       @foreach ($explode as $reference) 
                       <li  class="text-red-800 focus:text-violet-900 leading-4 md:leading-6 mb-2 font-medium active:text-violet-900 text-md sm:text-lg text-left text-wrap md:text-xl">&#64; <a class="hover:underline" target="_blank" href="{{ url($reference) }}">{{ $reference }}</a></li>
                       @endforeach
                    </ul>
                </div>
            </div>
@endif
@endforeach
    <script>
            copyBtn.addEventListener('click',(event)=>{
                const copyBtn = document.getElementById('copyBtn');
                const url = window.location.href;
                let copied = navigator.clipboard.writeText(url);
            })
    </script>
        
@endsection
