<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->input('filter', '');
        
        if ($filter) {
            $blogs = Blog::category($filter)->get();
        } else {
            $blogs = Blog::latest()->get();
        }
        
        return view('blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:5',
            'category' => 'required|in:Sport,Technology,Business,Health',
            'content' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
     $imageUrl= url( 'storage/' . $request->file('image')->store('images','public'));
      $blog = Blog::create([
          'title' => $request->title,
          'content' => $request->content,
          'category' => $request->category,
          'user_id' => Auth::id(),
          'image' => $imageUrl
      ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {

        $blogs = Blog::where('category', $blog->category)->latest()->get();
        $user = User::find($blog->user_id);
    
        return view('blogs.show', compact('blog', 'blogs', 'user'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit',compact('blog'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|max:255|min:5',
            'category' => 'required|in:Sport,Technology,Business,Health',
            'content' => 'required|min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageUrl = $blog->image;
        if($request->hasFile('image')){
            $imageUrl= url( 'storage/' . $request->file('image')->store('images','public'));
        }
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'image' => $imageUrl
        ]);
        return redirect()->route('blogs.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('profile');
    }
}
