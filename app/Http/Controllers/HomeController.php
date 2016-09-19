<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function home (Request $request) {
    	return 'Home';
    }

    public function showRegistrationForm() {
    	return view('page.register');
    }

    public function showLoginForm() {
        return view('page.login');
    }
}
