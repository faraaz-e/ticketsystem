<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

	public function index()
	{
		$title = 'Login | Ticket System';
		return view('pages.loginpage', compact('title')); // loading folder path: views/pages/loginpage.blade.php
	}

	public function admindashboard()
	{
		return view('pages.admindashboard');
	}


}
