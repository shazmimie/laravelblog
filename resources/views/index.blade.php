@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                    WELCOME TO MY BLOG!
                </h1>
  
            </div>
        </div>
    </div>
    <hr>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/12/17/18/51/spices-1914130_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Junior Software Engineer
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                I am a fresh graduate of Bachelor's Degree of Computer Science (Software Engineering) with Honours.A passionate software engineering student with multitasking skills. A self-dependent and resilient. A lover of new adventure and innovation. Always be open to opportunities and motivated to work in a fast-paced environment in order to solve complex problems. 
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Seeking a challenging career with a progressive organization that provides an 
              opportunity to maximize my technical skills 
              & abilities in the field of information 
              technology (IT).
              
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>



   

    
@endsection