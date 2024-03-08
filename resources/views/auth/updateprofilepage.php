@include('layout.app')

@section('content')
<section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
        {{ __('UpdateProfile') }}
    </header>
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="flex flex-wrap">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('E-Mail Address') }}:
            </label>
        </div>
        <div class="flex flex-wrap">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('Password') }}:
            </label>
        </div>
    </form>

</section>
@endsection
@include('layout.footer');