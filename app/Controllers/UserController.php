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
					'validateUser' => 'Email and Password not match'
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
			'first_name' => $user['first_name'],
			'last_name' => $user['last_name'],
			'profile' => $user['profile'],
			'email' => $user['email'],
			'password' => $user['password'],
			'isLoggedIn' => true
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
				'password' => 'required',
				'comfirm_password' => 'required|matches[password]',
				'role' => 'required',
				
			];
			if(!$this->validate($rules))
			{
				$valid['validation'] = $this->validator;
			}
			else
			{
				$model = new UsersModel();
				$firstName = $this->request->getVar('first_name');
				$email = $this->request->getVar('email');
				$password = $this->request->getVar('password');
				$role = $this->request->getVar('role');
				$data = [
					'first_name' => $firstName,
					'email' => $email,
					'password' => $password,
					'role' => $role,
				];
				$model->createUsers($data);
				$session = session();
				$session->setFlashdata('success','successful Register Account');
				// get first_name value from session
				$first_name = $model->where('first_name',$this->request->getVar('first_name'))
							  ->first();
				$this->setUserSession($first_name);
				return redirect()->to('/yourEvents');
			}
			
		}
		return view('auths/createAccount',$valid);
	}

//edit profile
	public function updateProfile()
	{
		helper(['form','url']);
		if($this->request->getMethod() == "post"){
			$model = new UsersModel();
			$first_name = $this->request->getVar('first_name');
			$last_name = $this->request->getVar('last_name');
			$email = $this->request->getVar('email');
			$password = $this->request->getVar('password');
			$encrapPassword = password_hash($password,PASSWORD_DEFAULT);
			$id = $this->request->getVar('id');
			$file = $this->request->getFile('profile');
			$userProfile = $file->getRandomName();
			$data = [
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'password' => $encrapPassword,
				'profile' => $userProfile,
				
			];
			$model->update($id,$data);
			$file->move("images",$userProfile);
			return redirect()->to('/');
		}
	}
	
	// Process of Logout
	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}

}
