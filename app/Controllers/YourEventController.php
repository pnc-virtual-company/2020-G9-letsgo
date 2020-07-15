<?php namespace App\Controllers;

class YourEventController extends BaseController
{
	public function showYourEvent()
	{
		return view('events/yourEvent');
	}
}