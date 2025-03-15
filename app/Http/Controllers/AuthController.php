<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function signUp(Request $request)
   {
       $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required|min:6'
       ]);
       try{
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
       }catch(\Exception $e){
           return redirect()->back()->withErrors(['Email already exists'])->withInput();
       }
      
       Auth::attempt($request->only('email', 'password'),true);
       Auth::login($user);
       return redirect()->route('home');
   }
   public function signIn(Request $request)
   {
     $credentials=  $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:6'
       ]);
       if(Auth::attempt($credentials,true)){
        Auth::login(Auth::user());
           return redirect()->route('home');
       }
       return redirect()->back()->withErrors(['Email or Password not correct'])->withInput();
   }
   public function signOut()
   {
       Auth::logout();
       return redirect()->route('sign-in');
   }
   
}
