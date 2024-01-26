<?php
namespace App\Controllers\auth;
use App\Controllers\BaseController;
use App\Models\UsersModel;

class Login extends BaseController
{
	
	public function index()
	{
		$data['title'] = "login";
		return view("auth/Login",$data);
	}

	public function process()
	{
		$username = $this->request->getVar("username");
		$password = $this->request->getVar("password");

		$usrmodel = new UsersModel;
		$usr = $usrmodel->getUsers($username);
		if(empty($usr))
		{
			return redirect()->back()->with("err","Invalid username!");
		}
		else
		{
			if(password_verify($password, $usr->password))
			{
				session()->set("userId",$usr->id);
				return redirect()->to(base_url('dashboard'));
			}
			else
			{
				return redirect()->back()->with("err","Invalid Password!");
			}
		}


	}
}