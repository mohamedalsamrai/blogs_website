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
    <title>Profile</title>
</head>

<body>
    <div>
        <div class="xl:px-8 md:px-8 mt-5 xm:px-3.5 flex justify-between">
            <h3
                class="poppins-bold-italic text-primry xl:text-h3sm md:text-h3sm mr-8 xm:mb-4 xl:mb-0 md:mb-0 xm:text-[22px]">
                <a href="{{ route('blogs.index') }}"> Think Verse</a>
            </h3>
            <a href="{{ route('sign-out') }}">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.25 26.25C5.5625 26.25 4.97417 26.0054 4.485 25.5163C3.99583 25.0271 3.75083 24.4383 3.75 23.75V6.25C3.75 5.5625 3.995 4.97417 4.485 4.485C4.975 3.99583 5.56333 3.75083 6.25 3.75H15V6.25H6.25V23.75H15V26.25H6.25ZM20 21.25L18.2812 19.4375L21.4687 16.25H11.25V13.75H21.4687L18.2812 10.5625L20 8.75L26.25 15L20 21.25Z"
                        fill="#757575" />
                </svg>


            </a>
        </div>
        <div class="items-center flex flex-col justify-center mt-5">
            @if (auth()->user() && auth()->user()->image)
                <div class="relative group">
                    <img src="{{ auth()->user()->image }}" alt="Profile"
                        class="xl:w-[175px] xl:h-[175px] xm:w-[125px] xm:h-[125px] rounded-full object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 rounded-full opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity cursor-pointer">
                        <form action="{{ route('user.update-image') }}" method="POST" enctype="multipart/form-data"
                            id="profileImageForm">
                            @csrf
                            @method('PUT')
                            <input type="file" name="image" id="profileImageInput" class="hidden" accept="image/*"
                                onchange="document.getElementById('profileImageForm').submit()">
                            <label for="profileImageInput" class="cursor-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M3 16.8V19.2C3 19.6774 3.18964 20.1352 3.52721 20.4728C3.86477 20.8104 4.32261 21 4.8 21H19.2C19.6774 21 20.1352 20.8104 20.4728 20.4728C20.8104 20.1352 21 19.6774 21 19.2V16.8M3 16.8C3 16.3226 3.18964 15.8648 3.52721 15.5272C3.86477 15.1896 4.32261 15 4.8 15H19.2C19.6774 15 20.1352 15.1896 20.4728 15.5272C20.8104 15.8648 21 16.3226 21 16.8M3 16.8V7.8C3 7.32261 3.18964 6.86477 3.52721 6.52721C3.86477 6.18964 4.32261 6 4.8 6H7.68L9.6 3H14.4L16.32 6H19.2C19.6774 6 20.1352 6.18964 20.4728 6.52721C20.8104 6.86477 21 7.32261 21 7.8V16.8"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </label>
                        </form>
                    </div>
                </div>
            @else
                <div class="relative group">
                    <svg width="125" height="125" viewBox="0 0 170 170" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="xl:w-[175px] xl:h-[175px] xm:w-[125px] xm:h-[125px]">
                        <path
                            d="M116.875 63.75C116.875 72.2038 113.517 80.3113 107.539 86.289C101.561 92.2668 93.4538 95.625 85 95.625C76.5462 95.625 68.4387 92.2668 62.461 86.289C56.4833 80.3113 53.125 72.2038 53.125 63.75C53.125 55.2962 56.4833 47.1887 62.461 41.211C68.4387 35.2333 76.5462 31.875 85 31.875C93.4538 31.875 101.561 35.2333 107.539 41.211C113.517 47.1887 116.875 55.2962 116.875 63.75Z"
                            fill="#757575" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 85C0 62.4566 8.95533 40.8365 24.8959 24.8959C40.8365 8.95533 62.4566 0 85 0C107.543 0 129.163 8.95533 145.104 24.8959C161.045 40.8365 170 62.4566 170 85C170 107.543 161.045 129.163 145.104 145.104C129.163 161.045 107.543 170 85 170C62.4566 170 40.8365 161.045 24.8959 145.104C8.95533 129.163 0 107.543 0 85ZM85 10.625C70.9939 10.6257 57.2726 14.5814 45.4155 22.0365C33.5584 29.4917 24.0474 40.1435 17.9771 52.7658C11.9069 65.3881 9.52411 79.468 11.1031 93.3848C12.6821 107.302 18.1587 120.49 26.9025 131.431C34.4463 119.276 51.0531 106.25 85 106.25C118.947 106.25 135.543 119.266 143.098 131.431C151.841 120.49 157.318 107.302 158.897 93.3848C160.476 79.468 158.093 65.3881 152.023 52.7658C145.953 40.1435 136.442 29.4917 124.584 22.0365C112.727 14.5814 99.0061 10.6257 85 10.625Z"
                            fill="#757575" />
                    </svg>
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 rounded-full opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity cursor-pointer">
                        <form action="{{ route('user.update-image') }}" method="POST" enctype="multipart/form-data"
                            id="profileImageForm">
                            @csrf
                            @method('PUT')
                            <input type="file" name="image" id="profileImageInput" class="hidden" accept="image/*"
                                onchange="document.getElementById('profileImageForm').submit()">
                            <label for="profileImageInput" class="cursor-pointer">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </label>
                        </form>
                    </div>
                </div>
                <span class="text-gray-500 text-sm mt-2 poppins-medium  ">Add profile photo</span>
            @endif
        </div>

        <div
            class="items-center flex justify-center xl:mt-4 text-primry xl:text-[20px] poppins-bold xm:text-[16px] xm:mt-3">
            <h1>
                {{ $user->name }}
            </h1>
        </div>
        <div
            class="items-center flex justify-start xl:mt-4 text-primry xl:text-[30px] poppins-semibold xm:text-[20px] xm:mt-3 xl:px-8 md:px-8 xm:px-3.5">
            <h3>Your Posts</h3>
        </div>
        <div>
            <div class="flex flex-wrap justify-center mt-10">
                @foreach ($blogs as $blog)
                    <div class="xl:w-[30%] md:w-[45%] xm:w-full xl:mx-5 md:mx-5 xm:mx-0 mb-10 xm:px-3 xl:px-0">
                        <a href="{{ route('blogs.show', $blog->id) }}"
                            class="block transition duration-300 xl:hover:shadow-xl xm:hover:shadow-none">
                            <div class="bg-white rounded-lg xl:shadow-md overflow-hidden xm:shadow-none">
                                <img src="{{ $blog->image }}" alt="Blog Image"
                                    class="w-full h-64 object-cover rounded-xl">
                                <div class="p-4">
                                    <div class="flex items-center mb-2 justify-between">
                                        <span class="text-xs poppins-semibold text-gray-600">•
                                            {{ $blog->category }}</span>
                                        <div class="flex space-x-2">
                                            <a href="{{ route('blogs.edit', $blog->id) }}">
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.2915 17.7219L11.8884 17.7063L21.9217 7.76879C22.3155 7.37504 22.5321 6.85212 22.5321 6.29587C22.5321 5.73962 22.3155 5.21671 21.9217 4.82296L20.2696 3.17087C19.4821 2.38337 18.1082 2.38754 17.3269 3.16775L7.2915 13.1073V17.7219ZM18.7967 4.64379L20.4519 6.29275L18.7884 7.94067L17.1363 6.28962L18.7967 4.64379ZM9.37484 13.9761L15.6561 7.75421L17.3082 9.40629L11.028 15.6261L9.37484 15.6313V13.9761Z"
                                                        fill="#404048" />
                                                    <path
                                                        d="M5.20833 21.875H19.7917C20.9406 21.875 21.875 20.9406 21.875 19.7917V10.7625L19.7917 12.8458V19.7917H8.49792C8.47083 19.7917 8.44271 19.8021 8.41563 19.8021C8.38125 19.8021 8.34687 19.7927 8.31146 19.7917H5.20833V5.20833H12.3406L14.424 3.125H5.20833C4.05937 3.125 3.125 4.05937 3.125 5.20833V19.7917C3.125 20.9406 4.05937 21.875 5.20833 21.875Z"
                                                        fill="#404048" />
                                                </svg>


                                            </a>
                                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-transparent border-0 p-0">
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.6668 9.375V19.7917H8.3335V9.375H16.6668ZM15.1043 3.125H9.896L8.85433 4.16667H5.2085V6.25H19.7918V4.16667H16.146L15.1043 3.125ZM18.7502 7.29167H6.25016V19.7917C6.25016 20.9375 7.18766 21.875 8.3335 21.875H16.6668C17.8127 21.875 18.7502 20.9375 18.7502 19.7917V7.29167Z"
                                                            fill="#404048" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <h3 class=" xl:text-[16px] xm:text-[14px] poppins-semibold mb-2 text-primry">
                                        {{ $blog->title }}</h3>
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
