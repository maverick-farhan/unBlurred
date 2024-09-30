@extends('main_layout')
@section('dynamic')
<div class="container">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h1 class="mt-3 text-center text-4xl leading-8 tracking-tight text-gray-900 font-extrabold">Admin Panel</h1>
    </div>

    <div style="overflow-x: auto;" class="text-wrap w-screen flex justify-center items-center mt-5 md:text-md">
        <table>
          <tr>
            <th class="px-2 w-auto">Post Id</th>
            <th class="px-2 w-auto">Title </th>
            <th class="px-2 w-auto">Article</th>
            <th class="px-2 w-auto">Category</th>
            <th class="px-2 w-auto">Author</th>
            <th class="px-2 w-auto">Keywords</th>
            <th class="px-2 w-auto">Image</th>
            <th class="px-2 w-auto">Image Credit</th>
            <th class="px-2 w-auto">References</th>
            <th class="px-2 w-auto">Created At</th>
            <th class="px-2 w-auto">Edit</th>
            <th class="px-2 w-auto">Delete</th>
          </tr>

          @foreach ($posts as $post)
          <tr>      
            <td class="px-2">{{ $post->id }}</td>
            <td class="px-2">{{ $post->title }}</td>
            <td class="px-2">
                    @php
                     echo substr($post->article,0,19).'.....'; 
                    @endphp
            </td>
            <td class="px-2">{{ $post->category }}</td>
            <td class="px-2">{{ $post->author }}</td>
            <td class="px-2">{{ $post->keywords }}</td>
            <td class="px-2">{{ $post->image }}</td>
            <td class="px-2">{{ $post->credit }}</td>
            <td class="px-2">{{ $post->references }}</td>
            <td class="px-2">{{ $post->created_at }}</td>
            <td class="px-2">
                <a href="{{ route('edit.post',$post->id) }}">
                    <i class="ri-pencil-fill text-green-800 text-xl"></i>
                </a>
            </td>
            <td class="px-5">
                <form action="{{ route('delete',$post->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><i class="ri-delete-bin-2-line text-center text-red-800 text-xl"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        </table>
      </div>

</div>
@endsection
