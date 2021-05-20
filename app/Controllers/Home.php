<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function project()
	{
		// dd('hello');
		return view('/pages/user/project/index');
	}
	public function kelas()
	{
		return view('/pages/user/kelas/index');
	}
}
