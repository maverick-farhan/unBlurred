@extends('main_layout')
@section('dynamic')
    <h1 class="editor text-2xl font-extrabold font-condensed text-center">Create: POST EDITOR</h1>
    <form action="{{ route('post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mt-10 w-full flex flex-col items-center">
            <div class="m-3 first-row flex-col md:flex-row flex justify-evenly items-center w-full">
                <label for="title" class="font-extrabold">TITLE</label>
                <input type="text" name="title" id="title" />
                <label for="category" class="font-extrabold uppercase">Category</label>
                <input type="text" name="category" id="category" />
                <label for="author" class="font-extrabold">AUTHOR</label>
                <input type="text" name="author" id="author" />
            </div>
            <br />
            <div class="m-3 w-full second-row flex-col md:flex-row flex justify-evenly items-center">
                <label for="keywords" class="font-extrabold">KEYWORDS</label>
                <input type="text" name="keywords" id="keywords" />
                <label for="image" class="font-extrabold uppercase">Image</label>
                <input type="file" name="image" id="image" />
                <label for="credit" class="font-extrabold uppercase">Credit Image</label>
                <input type="text" name="credit" id="credit" />
            </div>
        </div>
            <div class="post flex flex-col m-3">

                <label for="article" class="font-extrabold uppercase text-center">Article</label>
                <textarea name="article" id="article" cols="30" rows="20" class="rounded-md p-5 font-bold"></textarea>

                <label for="references" class="font-extrabold uppercase text-center ">References</label>
                <textarea name="references" id="references" cols="30" rows="3" class="rounded-md p-5 font-bold"></textarea>

            </div>

            <div class="submit text-center">
                <input type="submit" value="Submit" class="border border-black p-2 rounded-md font-bold w-1/2 cursor-pointer bg-red-600 text-white hover:bg-black hover:text-white transition-all" />
            </div>
        </form>
@endsection