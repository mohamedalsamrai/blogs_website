<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        </style>
        @vite('resources/css/app.css')
        <title>Show</title>
    </head>
<body class="xl:px-8 md:px-8 mt-5 xm:px-3.5">
    <div>
        <h3
            class="poppins-bold-italic text-primry xl:text-h3sm md:text-h3sm mr-8 xm:mb-4 xl:mb-8 md:mb-0 xm:text-[22px] ">
            <a href="{{ route('blogs.index') }}"> Think Verse</a>
        </h3>
    </div>
    <div class="xl:flex flex-grow xm:block ">
        <div class=" xl:w-[90%] xm:w-full xl:mb-0 xm:mb-[150px]">
<h1 class="xl:text-[35px] xm:text-[24px] poppins-semibold mb-2 text-primry">{{$blog->title}}</h1>

    <div class="flex  items-center mb-4">
        <img src="{{$user->image }}" alt="Profile" class="w-[35px] h-[35px] rounded-full object-cover">
        <p class="flex items-center justify-center "> 
            <p class="poppins-semibold text-gray-600 ml-2">by</p>
            <p class="ml-1 poppins-semibold mr-4">  {{$user->name}}</p>
            <p class="poppins-semibold text-gray-600">{{ $blog->created_at->diffForHumans() }}</p>
        </p>

    </div>
    <img src="{{$blog->image}}" class="xl:w-[100%] xm:w-full h-[45%] object-cover rounded-xl xl:mb-4 xm:mb-2" alt="Blog Image">
    <p class="xl:w-[100%] xm:w-full poppins-regular text-[17px] text-left text-gray-600 whitespace-pre-line">
        {{$blog->content}}
    </p >
        </div>
        <div>
            <h1 class="xm:items-center xm:justify-center xl:items-end flex xl:justify-end  text-primry  poppins-semibold text-[20px] mb-10 xm:w-full xl:w-[81%] "> Latest {{$blog->category}} Blogs</h1>
@foreach ($blogs as $item)
<div class="xl:w-[50%] md:w-[45%] xm:w-full xl:mx-5 md:mx-5 xm:mx-0 mb-10 items-center justify-center xl:ml-56">
    <a href="{{ route('blogs.show', $item->id) }}">
        <div class="bg-white  overflow-hidden ">
            <img src="{{ $item->image }}" alt="Blog Image" class="w-full h-64 object-cover ">
            <div class="pt-4">
                <div class="flex items-center mb-2">
                    <span class="text-xs poppins-semibold text-gray-600">• {{ $item->category }}</span>
                </div>
                <h3 class=" xl:text-[16px] xm:text-[14px] poppins-semibold mb-2 text-primry">{{ $item->title }}</h3>
            </div>
        </div>
    </a>
</div>
@endforeach
        </div>
    </div>
</body>
</html>