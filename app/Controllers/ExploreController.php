<?php namespace App\Controllers;
use App\Models\CitiesModel;
use App\Models\UsersModel;
class ExploreController extends BaseController
{
	public function showExplore()
	{
		$model = new CitiesModel();
		$json = $model->getCities();
		$data['dataJson'] = $json;
		$user = new UsersModel();
		$data['getUser'] = $user->where('id',session()->get('id'))->first();
		
		return view('events/exploreEvent',$data);
	}
}