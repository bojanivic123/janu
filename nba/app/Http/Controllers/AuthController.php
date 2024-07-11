<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegisterPage()
    {
        return view("pages.register");
    }

    public function showLoginPage()
    {
        return view("pages.login");
    }

    public function register(Request $request)
    {
        if (Auth::check()) {
            return redirect("/")->withErrors("You are already logged in.");
        }

        $request->validate([
            "name" => "required|string|min:3|max:30",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|confirmed"
        ]);

        $newUser = User::create(["name" => $request->name, "email" => $request->email, "password" => Hash::make($request->password)]);
        return redirect("/")->with("status", "You are completly registered");
    }

    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect("/")->withErrors("You are already logged in");
        }

        $request->validate([
            "email" => "required|exists:users,email",
            "password" => "required"
        ]);

        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            return redirect("/")->with("status", "You are logged in.");
        }

        return redirect("/login")->withErrors("Invalid credentials");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect("/login")->with("status", "You are logged out."); 
    }
}
