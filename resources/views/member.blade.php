@extends('main_layout')
@section('dynamic')
<div class="flex min-h-full flex-col justify-center px-6 py-9 md:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h1 class="mt-3 text-center text-4xl leading-8 tracking-tight text-gray-900 font-extrabold">Become Member</h1>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('savemember') }}" method="POST">
        @csrf
        <div>
          <label for="name" class="block text-base font-medium leading-6 text-black">Name</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" required class="border border-black block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 md:text-xl px-3 font-condensed font-bold text-lg sm:leading-6">
          </div>
        </div>
        <div>
          <label for="email" class="block text-base font-medium leading-6 text-black">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="border border-black block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 md:text-xl px-3 font-condensed font-bold text-lg sm:leading-6">
          </div>
        </div>
  
        <div>
        </div>
        <div>
          <input id="submit" type="submit" class="flex w-full justify-center rounded-md bg-red-600 px-3 py-3 font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 text-lg cursor-pointer" value="Become Member" />
          <div class="loader-animation relative flex justify-center items-center">
            <svg aria-hidden="true" id="loader" role="status" class="inline absolute -top-9 md:right-12 hidden right-32 w-7 h-7 me-3 text-black animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
            </svg>
          </div>
        </div>
        <p class="mt-10 text-center text-zinc-900 font-bold font-condensed text-xl">
          *Let unite the nation together with the bond of love,respect, and care of each other.
        </p>
      </form>
    </div>
  </div>
<script>
  let loader = document.getElementById("loader");
  let submit = document.getElementById('submit');
  submit.addEventListener('click',(e)=>{
    e.stopPropagation();
    loader.classList.remove("hidden");
  })

</script>

  @endsection