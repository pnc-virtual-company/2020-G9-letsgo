<?php namespace App\Controllers;
use App\Models\YourEventModel;
use App\Models\CategoryModel;
use App\Models\CitiesModel;
class ExploreController extends BaseController
{
	protected $event;
    protected $categorys;
    protected $jsons;

    public function __construct() 
    {
        $this->event = new YourEventModel();
        $this->categorys = new CategoryModel();
        $this->jsons = new CitiesModel();
    }
    public function showExplore()
	{
		$data = [
            'eventData' => $this->event->getEvent(),
            "categoryData" => $this->categorys->getCategory(),
            "dataJson" => $this->jsons->getCities(),
        ];
        return view('events/exploreEvent',$data);

	}
}