<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;

class CustomerController extends Controller
{
    public function index()
    {
    	return view('front-end.index');
    }

    public function login()
    {
    	return view('front-end.login');
    }

    public function showLoginForm(Request $request)
    {
		$email = $request['email'];
    	$password = $request['password'];
    	if (Auth::attempt(['email' => $email, 'password' => $password])) {
    		// return view('front-end.index', ['user' => Auth::user()]);
    		return redirect()->route('customer.index')->with(['user' => Auth::user()]);
    	} else {
    		return redirect()->route('customer.login');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return view('front-end.login');
    }
}
