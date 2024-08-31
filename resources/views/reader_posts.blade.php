@extends('main_layout')
@section('dynamic')

    {{-- Filter DIV and Search OPEN--}}
    <div class="filter-search items-center flex justify-between md:px-14 px-10 sm:w-full z-50  h-8 mt-5">
        <div class="filter relative md:right-0 right-3">
            <form class="max-w-full flex bg-white border-red-500 text-gray-900 border rounded px-2 py-1">
                <i class="ri-filter-3-line font-bold"></i>
                <select id="countries" class="font-bold cursor-pointer bg-transparent outline-0  text-sm  focus:ring-red-500 focus:border-red-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500">
                    <option selected>Filters</option>
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                    <option value="voted">Most Voted</option>
                </select>
              </form>
        </div>
        <div class="search">
            <form action="" action="get">
                <input class="focus:bg-slate-200 transition-all outline-1 py-1 rounded px-2 w-36 md:w-96 border-b border-red-500 bg-transparent" type="text" name="keyword" />
                <button type="submit" class="bg-red-200 hover:bg-red-600 hover:text-white transition-all p-1 rounded-full" ><i class="text-lg md:text-2xl  ri-search-line"></i></button>
            </form>
        </div>
    </div>
    {{-- Filter DIV and Search END--}}

    {{-- News View Open--}}

    <div class="container h-auto w-full">
        <div class="news-container border border-black w-11/12 h-36 md:w-11/12 rounded-md mx-auto mt-5 px-2 flex justify-between items-center md:h-40">

    {{-- POLL DIV --}}
    <div id="poll_div" class="hidden container absolute w-11/12 bg-slate-100 border border-black rounded-lg h-96 mx-auto flex flex-col justify-center items-center z-20">
        <i id="poll_close" class="absolute text-3xl text-slate-900 hover:text-red-700 cursor-pointer top-2 right-3 ri-close-circle-fill"></i>
        <h1>Our Volunteer Poll</h1>
        <p>98% True</p>
        <h5>Can check our detailed references from <a href="#" class="hover:underline-offset-4 transition-all underline text-red-700">here</a></h5>
    </div>
    {{-- POLL DIV CLOSED --}}



            <div class="left-wrapper md:w-3/4 w-4/6 px-3 flex flex-col justify-between h-full py-5">
                <div class="heading">
                    <a href="{{ route('blog1') }}" class="post hover:underline">
                    <h1 class="title font-extrabold text-sm md:text-xl uppercase text-wrap text-slate-900">India faces 578% spike in Covid-19 cases and 682% rise in deaths in one month</h1>
                    </a>
                    <h5 class="author text-sm font-condensed font-bold md:text-md capitalize text-gray-600"><a href="#" class="volunteer-profile uppercase hover:underline"> Aston Martin</a> <i class="ri-verified-badge-line text-rose-600"></i></h5>
                    <h5 class="inline-block author text-sm font-condensed md:text-md capitalize hover:text-gray-500 text-gray-400"><a href="#" class="volunteer-profile font-bold hover:underline">Report post <i class="ri-alert-line"></i></a></h5>
                </div>
                <div class="cta sm:top-3 md:mt-0 mt-3">
                    {{-- THis like button should be a form --}}
                    <button class="likes mx-3 md:text-md text-gray-800 font-bold text-sm relative -left-4"><i class="ri-heart-line md:text-base text-sm hover:text-red-600"></i> 120</button>
                    <button class="likes mx-3 md:text-md text-gray-800 font-bold text-sm relative -left-5"><i class="ri-eye-line md:text-base text-sm hover:text-blue-600"></i> 12k</button>
                    {{-- THis like button should be a form --}}
                </div>
            </div>

            <div class="right-wrapper flex flex-col justify-between items-start h-full py-2">
                <div class="reference px-2">
                    <a class="uppercase font-bold text-md md:text-base hover:text-red-500" href="#"><h1>References<i class="ri-link"></i></h1></a>
                    <ul class="fact_links md:text-md text-sm font-condensed ">
                        <li  class="text-blue-800"># <a class="hover:underline" href="#">facts.unblur.24.20</a></li>
                        <li  class="text-blue-800"># <a class="hover:underline" href="#">facts.unblur.24.22</a></li>
                        <li  class="text-blue-800"># <a class="hover:underline" href="#">facts.unblur.24.25</a></li>
                    </ul>
                </div>
            <div class="polls px-2" id="poll_link">
                <a class="cursor-pointer uppercase font-bold text-sm hover:text-red-500 md:text-base"><h1>Poll Scale <i class="ri-scales-3-line"></i></h1></a>
            </div>
        </div>
        </div>

    </div>
    {{-- News View Closed--}}


    <script>
        const pollBtn= document.getElementById('poll_close');
        const pollLink = document.getElementById('poll_link');
        const pollDiv = document.getElementById('poll_div');
        pollLink.addEventListener('click',(e)=>{
            pollDiv.style.display = "flex"
        })

        pollBtn.addEventListener('click',(e)=>{
            if(e.target.parentNode.style.display != "none"){
                e.target.parentNode.style.display = "none";
            }
        })
    </script>
@endsection
