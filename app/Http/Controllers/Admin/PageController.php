<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class PageController extends Controller
{
    public function index()
    { 
    	return view('back-end.layouts.master');
    }
}
