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
}
