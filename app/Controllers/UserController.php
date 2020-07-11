<?php namespace App\Controllers;

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
	// show event
	public function showEvent()
	{
		return view('manages/events');
	}

	public function showPorfile()
	{
		return view('layouts/navbar');
	}

	public function showCategory()
	{
		return view('manages/category');
	}

	public function showYourEvent()
	{
		return view('events/yourEvent');
	}
}