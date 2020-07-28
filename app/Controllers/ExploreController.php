<?php namespace App\Controllers;
use App\Models\CitiesModel;
class ExploreController extends BaseController
{
	public function showExplore()
	{
		$model = new CitiesModel();
		$json = $model->getCities();
		$data['dataJson'] = $json;
		return view('events/exploreEvent',$data);
	}
}