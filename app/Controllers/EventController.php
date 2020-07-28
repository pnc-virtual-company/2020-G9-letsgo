<?php namespace App\Controllers;
use App\Models\CitiesModel;
class EventController extends BaseController
{
	public function showEvent()
	{
		$model = new CitiesModel();
		$json = $model->getCities();
		$data['dataJson'] = $json;
		return view('manages/events',$data);
	}
}