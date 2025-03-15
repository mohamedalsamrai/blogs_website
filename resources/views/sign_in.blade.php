<!doctype html>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap');
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div>
        <div class="flex justify-center h-screen items-center xm:px-8 xl:px-0">
            <div class="bg-white xl:shadow-md rounded-lg py-9 xl:px-98 xm:w-screen xm:shadow-none xl:w-[40%] lg:w-[40%] md:w-1/2" >
                <div class="text-center xl:mb-10 xm:mb-7" >
                    <h1 class="poppins-bold-italic text-primry text-h1lg xm:text-h1sm mb-6 xm:mb-2">Think Verse</h1>
                    <h3 class="poppins-bold-italic text-primry1 text-h3 xm:text-h3sm ">Sign in</h3>
                </div>
                <div >
                    <form>
                        <label for="email" class="poppins-medium text-primry  ">Email</label>
                        <input type="email" id="email" placeholder="Enter your email"
                            class="w-full border border-gray-300 rounded-lg px-3 py-3.5 focus:border-gray-300 focus:ring-0 focus:outline-none mt-1 mb-6"
                            required>
                        <div class="relative w-full"><label for="password" class="poppins-medium text-primry ">Password</label>
                            <input type="password" id="password" placeholder="Enter password"
                                class="w-full border border-gray-300 rounded-lg px-3 py-3.5 focus:border-gray-300 focus:ring-0 focus:outline-none mt-1 mb-6"
                                required>
                                <svg  id="eye-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-[43%] right-4 ">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.991 6.67527C22.0783 6.71261 22.1573 6.76678 22.2237 6.83471C22.29 6.90264 22.3422 6.98298 22.3775 7.07113C22.4127 7.15928 22.4302 7.25351 22.4289 7.34843C22.4277 7.44336 22.4077 7.5371 22.3702 7.6243L21.7071 7.3394L22.3712 7.6243L22.3693 7.62815L22.3664 7.63489L22.3568 7.65799L22.3192 7.73884C22.109 8.17492 21.8754 8.59936 21.6195 9.0103C21.1063 9.83625 20.511 10.6082 19.8427 11.3145L20.7744 12.2472C20.9019 12.384 20.9713 12.565 20.968 12.752C20.9647 12.9391 20.889 13.1175 20.7567 13.2497C20.6245 13.382 20.446 13.4578 20.259 13.4611C20.072 13.4644 19.891 13.3949 19.7542 13.2674L18.7907 12.3049C18.1202 12.8695 17.3856 13.3531 16.602 13.7458L17.5009 15.127C17.6053 15.2876 17.6417 15.483 17.602 15.6704C17.5623 15.8577 17.4498 16.0217 17.2892 16.1261C17.1286 16.2305 16.9332 16.2668 16.7458 16.2271C16.5584 16.1874 16.3945 16.0749 16.2901 15.9143L15.242 14.3031C14.4912 14.5485 13.6798 14.715 12.8049 14.7747V16.4832C12.8049 16.6746 12.7289 16.8582 12.5935 16.9936C12.4581 17.129 12.2745 17.205 12.083 17.205C11.8916 17.205 11.708 17.129 11.5726 16.9936C11.4372 16.8582 11.3612 16.6746 11.3612 16.4832V14.7747C10.5568 14.7202 9.76194 14.5696 8.99341 14.3262L7.95968 15.9143C7.90798 15.9938 7.84113 16.0624 7.76295 16.116C7.68476 16.1697 7.59677 16.2074 7.504 16.2271C7.41123 16.2468 7.31549 16.248 7.22225 16.2306C7.12902 16.2133 7.04011 16.1778 6.96061 16.1261C6.80004 16.0217 6.68753 15.8577 6.64782 15.6704C6.62815 15.5776 6.62696 15.4819 6.64429 15.3886C6.66163 15.2954 6.69716 15.2065 6.74886 15.127L7.62762 13.7776C6.83753 13.389 6.09662 12.9076 5.42061 12.3434L4.49661 13.2674C4.36052 13.399 4.17821 13.4718 3.98893 13.4703C3.79966 13.4687 3.61857 13.3929 3.48466 13.2591C3.35076 13.1253 3.27475 12.9443 3.27302 12.7551C3.27128 12.5658 3.34396 12.3834 3.47539 12.2472L4.36474 11.3578C3.41925 10.3676 2.61943 9.24791 1.98929 8.0324C1.9263 7.90923 1.86597 7.78472 1.80834 7.65895L1.79872 7.63489L1.79487 7.62815V7.62526H1.79294C1.71738 7.44925 1.71484 7.24947 1.78587 7.07159C1.85689 6.8937 1.99568 6.75132 2.17169 6.67576C2.3477 6.6002 2.54651 6.59765 2.7244 6.66868C2.90229 6.73971 3.04467 6.87849 3.12023 7.0545V7.05642L3.12697 7.0699L3.15488 7.13054C3.18055 7.18572 3.22065 7.26753 3.27519 7.37598C3.94156 8.66516 4.82229 9.83165 5.87972 10.8256C6.71324 11.6004 7.73446 12.3136 8.95587 12.7833C9.95376 13.165 11.0137 13.3589 12.0821 13.355C13.1727 13.3589 14.2542 13.1567 15.2699 12.7592C16.4845 12.2809 17.499 11.5628 18.3258 10.7871C19.4312 9.73746 20.3403 8.49885 21.0102 7.12958L21.0372 7.06894L21.0429 7.05642M21.991 6.67527C21.8151 6.6001 21.6166 6.59878 21.439 6.66988C21.2614 6.74099 21.1193 6.87967 21.0439 7.05546L21.991 6.67527Z" fill="#1B1F26" fill-opacity="0.72"/>
                                    </svg>
                        </div>
            
                       <button type="submit" class="bg-primry text-white poppins-semibold py-3.5 w-full rounded-2xl text-bouttom hover:bg-black md:mt-14 xm:mt-14 xl:mt-14">Sign In</button>
                    </form>
                    <div class="text-center mt-6">
                        <p class="poppins-medium text-primry1">Don't have an account ? <a href="{{ route(name: 'sign-up') }}"
                                class="text-primry">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>