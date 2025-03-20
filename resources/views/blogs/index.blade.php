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
    <title>Home</title>
</head>

<body>
<div>
    <div class="xl:px-8 md:px-8 mt-5 flex justify-between items-center xm:px-3.5">
        <div class="xl:flex items-center xm:block md:flex">
            <h3 class="poppins-bold-italic text-primry xl:text-h3sm md:text-h3sm  xm:mb-4 xl:mb-0 md:mb-0 xm:text-[22px]">
               <a href="{{route('blogs.index')}}"> Think Verse</a>
            </h3>
            <div class="flex space-x-8 poppins-semibold xm:space-x-5 xm:mt-7 xl:mt-0 md:mt-0">
                @foreach (['Sport', 'Technology', 'Business', 'Health'] as $filter)
                    <a href="{{route('blogs.index',['filter'=>$filter])}}" class="text-gray-600 hover:text-primary xl:text-sm xm:text-[13px]">{{ $filter }}</a>
                @endforeach
            </div>
        </div>
        <div class="flex items-center space-x-8 xm:mb-14 xl:mb-0 md:mb-0 ">
            <a href="{{ route('blogs.create') }}" class="poppins-semibold text-primry1 xl:text-sm xm:text-[11px]">Create</a>
            
            <a href="{{ route('profile') }}">
                @if(auth()->user() && auth()->user()->image)
                    <img src="{{ auth()->user()->image }}" alt="Profile" class="w-[35px] h-[35px] rounded-full object-cover">
                @else
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.1875 9.375C17.1875 10.6182 16.6936 11.8105 15.8146 12.6896C14.9355 13.5686 13.7432 14.0625 12.5 14.0625C11.2568 14.0625 10.0645 13.5686 9.18544 12.6896C8.30636 11.8105 7.8125 10.6182 7.8125 9.375C7.8125 8.1318 8.30636 6.93951 9.18544 6.06044C10.0645 5.18136 11.2568 4.6875 12.5 4.6875C13.7432 4.6875 14.9355 5.18136 15.8146 6.06044C16.6936 6.93951 17.1875 8.1318 17.1875 9.375Z" fill="#757575"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.5C0 9.18479 1.31696 6.00537 3.66117 3.66117C6.00537 1.31696 9.18479 0 12.5 0C15.8152 0 18.9946 1.31696 21.3388 3.66117C23.683 6.00537 25 9.18479 25 12.5C25 15.8152 23.683 18.9946 21.3388 21.3388C18.9946 23.683 15.8152 25 12.5 25C9.18479 25 6.00537 23.683 3.66117 21.3388C1.31696 18.9946 0 15.8152 0 12.5ZM12.5 1.5625C10.4403 1.56261 8.42245 2.14432 6.67875 3.24067C4.93506 4.33702 3.53638 5.90345 2.64369 7.75968C1.75101 9.6159 1.4006 11.6865 1.63281 13.7331C1.86502 15.7796 2.6704 17.7191 3.95625 19.3281C5.06563 17.5406 7.50781 15.625 12.5 15.625C17.4922 15.625 19.9328 17.5391 21.0438 19.3281C22.3296 17.7191 23.135 15.7796 23.3672 13.7331C23.5994 11.6865 23.249 9.6159 22.3563 7.75968C21.4636 5.90345 20.0649 4.33702 18.3212 3.24067C16.5776 2.14432 14.5597 1.56261 12.5 1.5625Z" fill="#757575"/>
                    </svg>
                @endif
            </a>
        </div>
    </div>
    <div class="items-center flex justify-center mt-28 text-primry xl:text-[60px] poppins-semibold xm:text-[36px] xm:mt-11">
        <h1>
          @if (request()->has('filter'))
            {{ request('filter') }}
              
          @else
            All Blogs
          @endif
        </h1>
    </div>
    <div>
        <div class="flex flex-wrap justify-center mt-10">
            @foreach ($blogs as $blog)
                <div class="xl:w-[30%] md:w-[45%] xm:w-full xl:mx-5 md:mx-5 xm:mx-0 mb-10 xm:px-3 xl:px-0">
                    <a href="{{ route('blogs.show', $blog->id) }}" class="block transition duration-300 xl:hover:shadow-xl xm:hover:shadow-none">
                        <div class="bg-white rounded-lg xl:shadow-md overflow-hidden xm:shadow-none">
                            <img src="{{ $blog->image }}" alt="Blog Image" class="w-full h-64 object-cover rounded-xl">
                            <div class="p-4">
                                <div class="flex items-center mb-2">
                                    <span class="text-xs poppins-semibold text-gray-600">• {{ $blog->category }}</span>
                                </div>
                                <h3 class=" xl:text-[16px] xm:text-[14px] poppins-semibold mb-2 text-primry">{{ $blog->title }}</h3>
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