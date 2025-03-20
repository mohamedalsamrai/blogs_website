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
        <h3 class="poppins-bold-italic text-primry xl:text-h3sm md:text-h3sm mr-8 xm:mb-4 xl:mb-8 md:mb-0 xm:text-[22px]">
            <a href="{{ route('blogs.index') }}">Think Verse</a>
        </h3>
    </div>
    <div class="xl:flex flex-grow xm:block justify-between">
        <div class="xl:w-[65%] xm:w-full xl:mb-0 xm:mb-10">
            <h1 class="xl:text-[35px] xm:text-[24px] poppins-semibold mb-2 text-primry">{{$blog->title}}</h1>

            <div class="flex items-center mb-4">
                <img src="{{$user->image}}" alt="Profile" class="w-[35px] h-[35px] rounded-full object-cover">
                <div class="flex items-center"> 
                    <p class="poppins-semibold text-gray-600 ml-2">by</p>
                    <p class="ml-1 poppins-semibold mr-4">{{$user->name}}</p>
                    <p class="poppins-semibold text-gray-600">{{ $blog->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <img src="{{$blog->image}}" class="w-full h-auto object-cover rounded-xl xl:mb-4 xm:mb-2" alt="Blog Image">
            <p class="w-full poppins-regular text-[17px] text-left text-gray-600 whitespace-pre-line">
                {{$blog->content}}
            </p>
        </div>
        
        <div class="xl:w-[25%] xm:w-full xl:pl-10 xm:pl-0 xl:mt-0 xm:mt-12">
            <h1 class="text-primry poppins-semibold text-[20px] mb-6 xl:text-left xm:text-left flex justify-center">Latest {{$blog->category}} Blogs</h1>
            
            <div class="xm:grid xm:grid-cols-1 md:grid-cols-2 xl:grid-cols-1 gap-6">
                @foreach ($blogs as $item)
                <div class="w-full mb-6">
                    <a href="{{ route('blogs.show', $item->id) }}">
                        <div class="bg-white overflow-hidden">
                            <img src="{{ $item->image }}" alt="Blog Image" class="w-full h-48 object-cover rounded-lg">
                            <div class="pt-3">
                                <div class="flex items-center mb-1">
                                    <span class="text-xs poppins-semibold text-gray-600">• {{ $item->category }}</span>
                                </div>
                                <h3 class="xl:text-[16px] xm:text-[15px] poppins-semibold text-primry">{{ $item->title }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>