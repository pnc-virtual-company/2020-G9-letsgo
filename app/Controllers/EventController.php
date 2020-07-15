<?php namespace App\Controllers;

class EventController extends BaseController
{
	public function showEvent()
	{
		return view('manages/events');
	}
}