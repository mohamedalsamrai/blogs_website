<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('profile',['user'=>Auth::user(),'blogs'=>Auth::user()->blogs]);
    }
    public function updateImage(Request $request)
{
    $request->validate([
        'image' => 'required|image',
    ]);
    $user = User::find(Auth::id());
    $imagePath = $request->file('image')->store('profile', 'public');
    
    $user->image = url('storage/' . $imagePath);
    $user->save();
    
    return redirect()->back();
}
}
