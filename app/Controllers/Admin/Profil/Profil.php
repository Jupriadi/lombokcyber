<?php

namespace App\Controllers\Admin\Profil;

use App\Controllers\BaseController;

class Profil extends BaseController
{
	public function index($id=false)
	{
		$data=[
			'title' => 'Profil Organisasi',
			'subtitle' => 'Profil Lengkap Organisasi',
			'profil' => $this->profil->first(),
		];
		if($id == false)
		{

			return view("/pages/admin/profil/profil",$data);
		}else{
			return view('pages/admin/profil/editprofil',$data);

		}
	}
}
