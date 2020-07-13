<?php namespace App\Controllers;
use App\Models\UsersModel;
class UserController extends BaseController
{
	public function index()
	{
		return view('auths/login');
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

	// show profile
	public function showPorfile()
	{
		return view('layouts/navbar');
	}

}