<?php namespace App\Controllers;
use App\Models\eventModel;
class UserController extends BaseController
{
	public function index()
	{
		return view('auths/login');
	}

	// show form create account
	public function showFormCreateAccount()
	{
		return view('auths/createAccount');
	}
	public function showPorfile()
	{
		return view('layouts/navbar');
	}


}