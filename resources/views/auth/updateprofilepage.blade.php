@extends('layouts.updatelogin')
@section('content')
<section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
        UpdateProfile
    </header>
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{route('updateprofiledata')}}">
      @csrf
        <div class="flex flex-wrap">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                Name:
            </label>
            <input class='form-input w-full' type="text" id="name" name='name' value="{{ $name }}" />
        </div>
        <div class="flex flex-wrap">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                E-Mail Address:
            </label>
            <input class='form-input w-full' type="Email" id="email" name='email' value="{{$email}}" />
        </div>
        <div class="flex flex-wrap">
            <label for="Password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                Password:
            </label>
            <input class='form-input w-full' type="text" id="Password" name='password' value="{{ $password }}"/>
        </div>

        <div>
            <button class="select-none font-bold whitespace-no-wrap p-2 rounded-lg text-sm leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">SUBMIT</button>
        </div>
        <div>
         <a href="layouts/index"><button class="select-none font-bold whitespace-no-wrap p-2 rounded-lg text-sm leading-normal no-underline text-gray-100 bg-red-500 hover:bg-yellow-700 sm:py-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">Cancel </a></button>
        </div>
    </form>

</section>
@endsection
