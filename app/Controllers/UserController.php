<?php namespace App\Controllers;

class UserController extends BaseController
{
	public function index()
	{
		return view('auths/login');
	}
	public function showFormRegister()
	{
		return view('auths/register');
	}
}