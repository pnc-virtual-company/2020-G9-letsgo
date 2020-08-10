<?php namespace App\Controllers;
use App\Models\YourEventModel;
use App\Models\CategoryModel;
use App\Models\CitiesModel;
use App\Models\UsersModel;
class EventController extends BaseController
{
	protected $event;
    protected $categorys;
    protected $jsons;
    protected $users;

    public function __construct() 
    {
        $this->event = new YourEventModel();
        $this->categorys = new CategoryModel();
        $this->jsons = new CitiesModel();
        $this->users = new UsersModel();
    }
	public function showEvent()
	{
		$data = [
			"userData" => $this->users->getUser(),
            "eventData" => $this->event->getEvent(),
            "categoryData" => $this->categorys->getCategory(),
            "dataJson" => $this->jsons->getCities(),
        ];
		$user = new UsersModel();
		$data['getUser'] = $user->where('id',session()->get('id'))->first();
		return view('manages/events',$data);
	}



	// delete your event
    public function deleteEvent($event_id){
        $this->event->find($event_id);
        $this->event->delete($event_id);
        return redirect()->back();
    }
}