<?php namespace App\Controllers;
use App\Models\YourEventModel;
use App\Models\CategoryModel;
use App\Models\CitiesModel;
use App\Models\UsersModel;
use App\Models\JoinModel;
class ExploreController extends BaseController
{
	protected $event;
    protected $categorys;
    protected $jsons;
    protected $users;
    protected $joins;

    public function __construct() 
    {
        $this->event = new YourEventModel();
        $this->categorys = new CategoryModel();
        $this->jsons = new CitiesModel();
        $this->users = new UsersModel();
        $this->joins = new JoinModel();
    }
    public function showExplore()
	{
		$data = [
            'eventData' => $this->event->getEvent(),
            "categoryData" => $this->categorys->getCategory(),
            "dataJson" => $this->jsons->getCities(),
            "userData" => $this->users->getUser(),
            "joinData" => $this->joins->getJoin(),
        ];

		$user = new UsersModel();
		$data['getUser'] = $user->where('id',session()->get('id'))->first();
        return view('events/exploreEvent',$data);

    }
    
    public function userJoin(){
        helper(['form','url']);
        if($this->request->getMethod() == "post"){
            $user = $this->request->getVar('user_join');
            $event = $this->request->getVar('event_join');
            $data = [
                'user_id' => $user,
                'event_id' => $event,
            ];

            $this->joins->insert($data);
            return redirect()->to('/explore');
        }
    }


    public function userQuit(){
        $user = $this->request->getVar('user_quit');
        $this->joins->delete($user);
        return redirect()->to('/explore');
    }

}