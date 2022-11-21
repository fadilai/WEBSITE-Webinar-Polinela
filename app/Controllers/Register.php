<?php namespace App\Controllers;

use App\Models\LoginModel;

class Register extends BaseController
{
	public function index()
	{
		//include helper form
		helper(['form']);
		$data = [];
		echo view('/login/register', $data);
	}

	public function save()
	{
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'name' 			=> 'required|min_length[3]|max_length[255]',
			'email' 		=> 'required|min_length[6]|max_length[255]|valid_email|is_unique[users.user_email]',
			'password' 		=> 'required|min_length[6]|max_length[255]',
			'confpassword' 	=> 'matches[password]'
		];

		if($this->validate($rules)){
			$model = new LoginModel();
			$data = [
				'user_name' 	=> $this->request->getVar('name'),
				'user_email' 	=> $this->request->getVar('email'),
				'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
			];
			$model->save($data);
			return redirect()->to('/login');
		}else{
			$data['validation'] = $this->validator;
			echo view('register', $data);
		}
		
	}

}