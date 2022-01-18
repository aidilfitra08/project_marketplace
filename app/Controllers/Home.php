<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	protected $userModel;
	public function __construct()
	{
		$this->userModel = new UserModel();
	}
	public function index()
	{
		return view('home');
	}

	public function aboutUs()
	{
		echo view('aboutUs');
	}

	// public function account()
	// {
	// 	$session = session();
    //     $model = new UserModel();
	// 	$email = $session->get('user_email');
		
	// 	$data['user'] = $this->userModel->getUser($email);
    //     // $password = $this->request->getVar('password');
	// 	// $remember = $this->request->getVar('remember');
	// 	// $data = $model->where('user_email', $email)->first();
	// 	// $ses_data['user'] = [
	// 	// 	'user_id'       => $data['user_id'],
	// 	// 	'user_name'     => $data['user_name'],
	// 	// 	'user_email'    => $data['user_email'],
	// 	// 	// 'user_pass'     => $password,
	// 	// 	// 'remember'      => $remember,
	// 	// 	// 'logged_in'     => TRUE
	// 	// ];
        
	// 	return view('Account',$data);
	// }
	//--------------------------------------------------------------------

}
