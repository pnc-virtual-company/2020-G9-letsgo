<?php namespace App\Controllers;
use App\Models\CitiesModel;
class YourEventController extends BaseController
{
	public function showYourEvent()
	{
		$model = new CitiesModel();
		$json = $model->getCities();
		$getJson['dataJson'] = $json;
		return view('events/yourEvent',$getJson);
	}
}