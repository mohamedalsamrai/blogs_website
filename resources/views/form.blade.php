<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Form</title>
   <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap');</style>
   @vite('resources/css/app.css')
</head>
<body>
   <div>
    <div class="flex justify-center h-screen items-center xm:px-8 xl:px-0">
       <div class="bg-white xl:shadow-md rounded-lg py-9 xl:px-98 xm:w-screen xm:shadow-none xl:w-[40%] lg:w-[40%] md:w-1/2">

        <h2 class="poppins-bold text-[#2F3238] text-h3 xm:text-h3sm mb-10">{{isset($blog) ?'Edite Post' :'Create post'}}</h2>
        
        <form action="{{ isset($blog) ? route('blogs.update', ['blog' => $blog->id]) : route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @if (isset($blog))
            @method('PUT')
        @endif
            @csrf
                <div><label for="title" class="poppins-medium text-primry">Title</label>
                    <input type="text" name="title" id="title" value="{{ $blog->title ?? old('title') }}" class="w-full border border-gray-300 rounded-lg px-3 py-3.5 focus:border-gray-300 focus:ring-0 focus:outline-none mt-1 mb-6" required>
                    @error('title')
                    <p class="text-red-600 mb-5">{{ $message }}</p>
                @enderror
                </div>
           
<div>                <label for="content" class="poppins-medium text-primry ">Content</label>
    <textarea name="content" id="content" class="w-full border border-gray-300 rounded-lg px-3 py-3.5 focus:border-gray-300 focus:ring-0 focus:outline-none mt-1 mb-6 resize-none" rows="5">{{ $blog->title ?? old('content') }}</textarea>
    @error('content')
    <p class="text-red-600 mb-5">{{ $message }}</p>
@enderror
</div>
            

            <div class="form-group">
                <label for="Category" class="poppins-medium text-primry">Category</label>
                <select name="category" id="category" class="w-full border border-gray-300 rounded-lg px-3 py-3.5 focus:border-gray-300 focus:ring-0 focus:outline-none mt-1 mb-6 pr-14" required>
                    <option value="Sport">Sport</option>
                    <option value="Technology">Technology</option>
                    <option value="Business">Business</option>
                    <option value="Health">Health</option>
                </select>
            </div>
             <div>   <label for="image" class="poppins-medium text-primry">Image</label>
                <input type="file" name="image" id="image" class="w-full py-3.5 mt-1 mb-6" required >
                @error('image')
                <p class="bg-red-600 mb-5">{{ $message }} </p>
            @enderror
            </div>
         

            <button type="submit" class="bg-primry text-white poppins-semibold w-28 rounded-2xl text-[16px] hover:bg-black h-11 mr-3">
                @isset($task)
                Edit
            @else
                Add 
            @endisset </button>
            <form action="{{ route('home') }}">
                <button type="submit" class="bg-[#EFEFEF] text-black poppins-semibold w-28 rounded-2xl text-[16px] hover:bg-[#979797] h-11">Cancel</button>
            </form>
        </form>

       </div>
    </div>
   </div>
</body>
</html>