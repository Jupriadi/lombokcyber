<?php

namespace App\Controllers\Admin\Akun;

use App\Controllers\BaseController;

class Akun extends BaseController
{
	public function index()
	{
		// $key = $this->request->getVar('q');
		// if($key==null):
		// 	$getAkun = $this->user->getAkun();
		// else:
		// 	$getAkun = $this->user->cariAkun($key);
		// endif;

		$data=[
			'title' => 'Akun Pengguna',
			'subtitle' => 'Data Akun Semua Pengguna',
			'akun' => $this->user->paginate(10),
			'pager' =>$this->user->pager,
		];

		return view("/pages/admin/akun/akun",$data);
	}
}
