<?php namespace App\Controllers;
use App\Models\eventModel;
class UserController extends BaseController
{
	public function index()
	{
		return view('auths/login');
	}

	//--------------------------------------------------------------------
	public function showFromRegister()
	{
		return view('auths/register');
	}

	public function showDashboard()
	{
		return view('layouts/navbar');
	}

	public function showExplore()
	{
		return view('events/exploreEvent');
	}
}