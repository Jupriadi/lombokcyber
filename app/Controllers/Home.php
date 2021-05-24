<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Profil Organisasi',
			'subtitle' => 'Profil Lengkap Organisasi',
			'profil' => $this->profil->first(),
		];
		return view('index',$data);
	}

	public function project()
	{
		return view('/pages/user/project/index');
	}

	public function kelas()
	{
		return view('/pages/user/kelas/index');
	}
}
