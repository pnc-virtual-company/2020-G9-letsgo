<?php namespace App\Controllers;
use App\Models\UsersModel;
class UserController extends BaseController
{
	
// login user process
public function index()
{
	helper(['form']);
	$data = [];
	if($this->request->getMethod() == "post"){
		$rules = [
			'email' => 'required|valid_email',
			'password' => 'required|validateUser[email,password]'
		];
		$errors = [
			'password' => [
				'validateUser' => 'User and password not match'
			]
		];

		if(!$this->validate($rules,$errors)){
			$data['validation'] = $this->validator;
		}else{
			$model = new UsersModel();
			$user = $model->where('email',$this->request->getVar('email'))
						  ->first();
			$this->setUserSession($user);
			return redirect()->to('/yourEvents');
		}
	}
	return view('auths/login',$data);
}

// set value to new session
public function setUserSession($user){
	$data = [
		'id' => $user['id'],
		'email' => $user['email'],
		'password' => $user['password'],
	];
	session()->set($data);
	return true;
}

	// create account 
	public function register()
	{
		helper(['form','url']);
		$valid = [];
		if($this->request->getMethod() == "post")
		{
			$rules = [
				'email' => 'required|valid_email',
				'password' => 'required|min_length[8]|max_length[50]',
				'repeat_password' => 'required|matches[password]',
				'role' => 'required'
			];
			if(!$this->validate($rules))
			{
				$valid['validation'] = $this->validator;
			}
			else
			{
				$model = new UsersModel();
				$email = $this->request->getVar('email');
				$password = $this->request->getVar('password');
				$role = $this->request->getVar('role');
				$data = [
					'email' => $email,
					'password' => $password,
					'role' => $role,
				];
				$model->createUsers($data);
				$session = session();
				$session->setFlashdata('success','successful Register Account');
				return redirect()->to('/');
			}
			
		}
		return view('auths/createAccount',$valid);
	}

	

}