<?php namespace App\Controllers;

class ExploreController extends BaseController
{
	public function showExplore()
	{
		return view('events/exploreEvent');
	}
}