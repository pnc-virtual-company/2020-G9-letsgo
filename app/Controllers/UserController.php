<?php namespace App\Controllers;
use App\Models\UsersModel;
class UserController extends BaseController
{
	// login user process
	public function index()
	{
		helper(['form']);
		
		if($this->request->getMethod() == "post"){

			// 1- Validate the user input from the POST request
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

				// 2- If error in validation, display login view with errors
				$data = [];
				$data['validation'] = $this->validator;

				 print_r($errors);
			
				//return view('auths/login',$data);

			}else{
				// If NO error in validation, set session and redirect to yourEvents
				$model = new UsersModel();
				$user = $model->where('email',$this->request->getVar('email'))
							  ->first();
				$this->setUserSession($user);
				return redirect()->to( base_url('yourEvents'));
			}
		}
		else {
			// If request, just display the login view with no data
			return view('auths/login', []);
		}
	}

	// set value to new session
	public function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'first_name' => $user['first_name'],
			'last_name' => $user['last_name'],
			'email' => $user['email'],
			'password' => $user['password'],
			'profile' => $user['profile'],
			'date_of_birth' => $user['date_of_birth'],
			'city' => $user['city'],
			'gender' => $user['gender'],
			'isLoggedIn' => true
		];
		session()->set($data);
		return true;
	}

	// create account 
	public function register()
	{
		helper(['form','url']);
		$data = [];
		if($this->request->getMethod() == "post")
		{
			$rules = [
				'email' => 'required|valid_email|is_unique[users.email]',
				'password' => 'required',
				'comfirm_password' => 'required|matches[password]',
				'role' => 'required',
				
			];
			if(!$this->validate($rules))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				$model = new UsersModel();
				$firstName = $this->request->getVar('first_name');
				$lastName = $this->request->getVar('last_name');
				$email = $this->request->getVar('email');
				$password = $this->request->getVar('password');
				$role = $this->request->getVar('role');
				$data = [
					'first_name' => $firstName,
					'last_name' => $lastName,
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
				return redirect()->to(base_url('/yourEvents'));
			}
			
		}
		$user = new UsersModel();
		$data['getUser'] = $user->where('id',session()->get('id'))->first();
		
		return view('auths/createAccount',$data);
	}
	//edit profile
	public function updateProfile()
	{
		helper(['form','url']);
		$model = new UsersModel();
		if($this->request->getMethod() == "post"){
				$id = $this->request->getVar('id');
				$first_name = $this->request->getVar('first_name');
				$last_name = $this->request->getVar('last_name');
				$email = $this->request->getVar('email');
				$birthday = $this->request->getVar('date_of_birth');
				$city = $this->request->getVar('city');
				$gender = $this->request->getVar('gender');
				$file = $this->request->getFile('profile');
				$fileName = $file->getRandomName();
				if($file->getSize()> 0)
				{
					$file->move('images/profile', $fileName);
				}
				$data = [
					'first_name' => $first_name,
					'last_name' => $last_name,
					'email' => $email,
					'date_of_birth' => $birthday,
					'city' => $city,
					'gender' => $gender,
					'profile' => $fileName,
				];
				$model->update($id,$data);
				return redirect()->back();
			
		}
	}
	
	// Process of Logout
	public function logout(){
		session()->destroy();
		return redirect()->to(base_url('/'));
	}

}
