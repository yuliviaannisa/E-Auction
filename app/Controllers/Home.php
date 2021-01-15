<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}

	public function template(){
		return view('admin');
	}

	public function logon(){
		return view('login_layout');
	}
	//--------------------------------------------------------------------

}
