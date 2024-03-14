@extends('layouts.app')
@section('styles')
<link href="{{ asset('css/blogpage.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="blogtext">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="blogtitle">
                {{ $post->title }}
            </h2>

            <span class="blogusername">
                By <span class="blogusername">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="blogdescp">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="Blogmainbutton">
                Keep Reading
            </a>
           
            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
            <a href="{{route('writearticle',['id'=>$post->id])}}" class="Blogmainbutton">Write-Article</a>

                <span class="blogbutton">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="editbutton">
                        Edit
                    </a>
                </span>
               
                <span class="blogbutton">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="deletebutton"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection