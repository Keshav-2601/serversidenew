@extends('layouts.app')

@section('content')
    <div class="relative">
        <img src="https://wallpaperaccess.com/full/540889.jpg" class="w-full">
        <div class="absolute inset-0 flex items-center justify-center z-20">
            <div class="text-center text-white">
                <h1 class=" text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a car-designer?
                </h1>
                <a 
                    href="/blog"
                    class="inline-block bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://th.bing.com/th/id/OIP.Tg45_wNXzHN2N4kCdeAskwHaEK?w=272&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better car designer?
            </h2>
            
            <p class="py-8 text-black-500 text-s">
            “Solo chi osa, vive davvero”-means Only those who dare, truly live.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
            Start by immersing yourself in the world of cars. Spend time in an automotive shop or work directly on a car to understand how they are built and how they function mechanically. This practical experience will give you valuable insights into the automotive industry.

            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Car Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Car_interior Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Software Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
    Keep abreast of the latest trends and innovations in automotive design. Attend car shows, network with professionals, and follow industry developments on social media.
    Create a portfolio showcasing your design concepts, sketches, and 3-D models. A strong portfolio is essential when applying for car designer positions.
        </p>
    
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                   CARS
                </span>

                <h3 class="text-xl font-bold py-10">
                Ferrari’s motto is “Essere Ferrari”, which translates to “Being Ferrari” or “We are Ferrari” in English. This motto represents the pride of a team capable of bringing together the best of Italy, as well as creativity, enterprise, ingenuity, and heart2. Another slogan used by Ferrari is "We are the competition"3. These mottos embody the spirit and identity of Ferrari.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection