@extends('main_layout')
@section('dynamic')

<br />
    <span class="mx-10"><i class="text-xl ri-arrow-left-line"></i><a href="{{ url('/') }}" class=" hover:underline text-base"> Back</a></span>

    <div  id="top" class="container h-auto w-11/12 p-2 text-center mx-16 flex flex-col relative md:left-0 -left-7 justify-center items-center">
        <div class="title">
            <h1 class="md:px-10 px-4 text-2xl md:text-4xl font-extrabold text-slate-900">India faces 578% spike in Covid-19 cases and 682% rise in deaths in one month</h1>
            <h5 class="font-condensed md:text-xl capitalize font-bold text-gray-600 text-md"><a href="#" class="hover:underline">Ansh Pathak </a><i class="ri-verified-badge-line text-rose-600"></i></h5>
        </div>
        <div class="misc">
            <ul class="text-gray-700 flex md:w-96 text-sm mt-2 justify-between w-72 flex-row items-center font-bold">
                <li class="time">11:09<i class="ri-time-line"></i></li>
                <li class="date">11-08-24<i class="ri-calendar-line"></i></li>
                <li class="likes">1239<i class="ri-heart-line"></i></li>
                <li class="views">12k<i class="ri-eye-line"></i></li>
            </ul>
        </div>
        <div class="cover-image flex justify-center items-center">
            <img src="https://img.thedailybeast.com/image/upload/c_crop,d_placeholder_euli9k,h_1688,w_3000,x_0,y_0/dpr_2.0/c_limit,w_740/fl_lossy,q_auto/v1620146835/210504-conversation-india-tease_cslz2j" alt="blog1-image" class="md:w-2/3 object-cover object-center shadow-xl shadow-blue-gray-900 rounded-lg my-5" />
        </div>

        <div class="post my-2 text-left">
            <p class=" text-base md:text-xl first-letter:text-5xl text-slate-950">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam neque delectus quod saepe eos voluptate magni esse non libero suscipit, sed consectetur? Non quasi ipsum labore delectus sed dignissimos temporibus molestiae, reprehenderit, sit voluptatum fuga commodi quaerat, mollitia ullam excepturi totam aspernatur voluptates. Fugiat quidem accusantium a suscipit assumenda corrupti! Perspiciatis consequuntur laboriosam cum at maxime iure delectus eum reiciendis autem voluptatem repellat odit dicta error amet tempora nostrum, magni commodi sit quam aperiam vel laudantium saepe necessitatibus est. Similique sunt praesentium cumque ratione. Eius enim rerum dolor est impedit.
            <br />
            <br />
            I'll smash your face in. I'll make you disappear., You better watch yourself. I'll beat your ass. I'll break your legs. I'll bury you.. Don't push your luck. I don't play games. I'll break your legs. I got eyes everywhere., You don't want none of this. Don't make me come over there. You better be packing. I'll knock you out. You ain't got nothing on me.. You think you can handle this? You're a dead man. You don't scare me. You better have a good reason.. I'll smash your face in. You ain't shit. I'll blow your head off. Better step aside., I'll bury you. I'll beat your ass. I'll make you disappear. I got eyes everywhere. I'll mess you up.. I'll put a bullet in you. You're a waste of space. I'll bury you..

            <br />
            <br />
            You ain't got nothing on me. This ain't your business. You don't wanna go there. Don't make me come over there.. You ain't shit. You better think twice., I'll put a bullet in you. Don't mess with me, nigga. You want a problem? You wanna end up in a ditch?. You don't stand a chance. You wanna end up in a ditch?, I'll make you disappear. You think you're tough? Don't mess with me, nigga.. Keep your mouth shut. You're nothing but a loser. You ain't got nothing on me. Mind your own business., You messing with the wrong guy. You better think twice. I ain't afraid of you. You don't stand a chance. You're a waste of space.. You messin' with me? I own this place., Step off. I'll break your legs. Don't make me come over there. Back off!. I call the shots. You better back down. You're a waste of space. Don't push your luck., I don't take orders. Don't make me come over there. You're a dumbass. Don't test me. Get lost..

            <br />
            <br />
            You messing with the wrong guy. What's up, homie? Step off. You're a waste of space.. You messin' with me? You better have a good reason., Mind your own business. You don't wanna go there. Back off!. I'll blow your head off. You got a death wish?, I run this show. I'm the boss around here. You better watch your step. I'll beat your ass.. You talking to me? I'll blow your head off., I own this place. I'll make you disappear. I don't play games. I'll cut you.. Step off. I'm the boss around here., You better back down. Better step aside. You're a piece of crap.. Get lost. Don't mess with me, nigga. I'll fuck you up. I'm the boss around here..

            <br />
            <br />
            You looking for a fight? You got a death wish? You don't scare me. You better back down.. I'll cut you. You're asking for trouble., What's up, homie? You're dead meat. You don't wanna go there. I run these streets.. Don't try me. Watch your back., Back off! I run these streets. You wanna piece of this?. You looking for a fight? You better think twice. I'll fuck you up., You want a problem? You ain't worth my time. You don't stand a chance. I call the shots.. Watch your back. You ain't worth my time. You're a waste of space. Don't test me..

            <br />
            <br />
            I don't play games. You're nothing but a loser., Mind your own business. You think you're tough? I'm the boss around here.. I run this show. I'll blow your head off. I'll put a bullet in you., You don't stand a chance. I don't play games. Keep your mouth shut. You better watch yourself. Back off!. Stay out of my business. I ain't afraid of you., I'll fuck you up. I got eyes everywhere. Don't push your luck. Step off.. I'll put a bullet in you. You messin' with me? I don't take orders., What's up, homie? I'll knock you out. This ain't your business. You got a death wish? Mind your own business..
            <br />
            </p>
        </div>

        <div class="next flex flex-col md:flex-row justify-between items-center w-full">
            {{-- Random feed here for different users --}}
            <h1 class="font-bold mt-3 w-fit text-md md:text-xl text-slate-900">See Next <i class="ri-arrow-right-line"></i></h1>
            <p class="text-sm text-left font-bold">
            <a href="" class="underline hover:text-rose-900 text-md md:text-xl text-slate-900">India faces 578% spike in Covid-19 cases and 682% rise in deaths in one month</a>
            </p>
        </div>
        <br />
        <div class="w-full">
            <label for="comments"><h1 class="text-center font-bold capitalize text-base md:text-2xl"><i class="ri-feedback-line"></i> Write your thoughts</h1></label>
            <textarea name="comments" id="comments" class="block border-2 w-full h-20 md:h-32 p-3 font-bold rounded border-slate-800"></textarea>
        </div>
        <br />
    </div>
    <div class="top font-bold bg-slate-900 inline text-white w-8 h-8 md:w-12 md:h-12 text-lg md:text-2xl right-10 bottom-32 p-1 fixed rounded-full text-center">
        <a href="#top"><i class="ri-arrow-up-double-fill"></i></a>
    </div>

@endsection