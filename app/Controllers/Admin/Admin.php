<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function index()
	{

		$data=[
			'title' => 'Beranda',
			'subtitle' => 'tes'
		];

		return view("/pages/admin/index",$data);
	}

	public function project()
	{

		$data=[
			'title' => 'Project',
			'subtitle' => ''
		];

		return view("/pages/admin/project/project",$data);
	}
}
