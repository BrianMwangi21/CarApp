<?php

namespace App\Http\Controllers;

use App\Admins;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class AdminsController extends Controller
{
    public function login(Request $request) {
        return view('login');
    }

    public function register(Request $request) {
        return view('register');
    }

    public function registerNew(Request $request) {
        $admin = new Admins;
        $admin->id = Uuid::generate()->string;
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->username = $request->username;
        $admin->password = md5( $request->password );
        $saved = $admin->save();

        if( $saved ) {
            return redirect('/register')
                ->with("success", "Admin created")
                ->withInput();
        }else {
            return redirect('/register')
                ->withError("Admin not created. Try again")
                ->withInput();
        }
    }

    public function loginCheck(Request $request) {
        $admin = Admins::where('username', $request->username)->
                        where('password', md5( $request->password ) )->first();

        if( $admin ) {
            $request->session()->put('username', $request->username);
            return redirect('/home');
        }else {
            return redirect('/')
                ->withError("Admin not found. Try again")
                ->withInput();
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return view('login');
    }
}
