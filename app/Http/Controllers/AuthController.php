<?php

namespace App\Http\Controllers;

use App\Events\VerifyAccount;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index() {
        return view("auth.login");
    }

    public function register_view() {
        return view("auth.register");
    }

    public function reset_view() {
        return view("auth.reset");
    }

    public function forgot_view() {
        return view("auth.forgot");
    }

    public function register(Request $request) {
        $avatar = "avatar.png";
        if($request->file("avatar")) {
            $ext = $request->file("avatar")->extension();
            $avatar = time() . "_avatar." . $ext;
            $request->file("avatar")->move(public_path("assets/images/") , $avatar);
        }
        $user = User::create([
            'name' => $request['name'],
            'gender' => $request['gender'],
            'avatar' => $avatar,
            'birth_date' => $request['birth_date'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role_id' => 1
        ]);
        event(new VerifyAccount($user));
    }

    public function verify($id) {
        $user = User::find(base64_decode($id));
        $user->update([
            "is_verify" => 1
        ]);
        return redirect()->route("login-page")->with("success", "Account successfully verified!");
    }

    public function login(Request $request) {
        $data = [
            "email" => $request['email'],
            "password" => $request['password'],
        ];

        if(Auth::attempt($data)) {
            return redirect()->route("home-page");
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route("login-page");
    }

}
