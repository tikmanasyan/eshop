<?php

namespace App\Http\Controllers;

use App\Events\VerifyAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            $request->file("avatar")->move(public_path("assets/images/") . $avatar);
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

    public function verify() {

    }

    public function login(Request $request) {

    }

    public function logout() {

    }

}
