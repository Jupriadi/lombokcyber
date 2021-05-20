<?php

namespace App\Controllers\Admin\Kelas;

use App\Controllers\BaseController;

class Kelas extends BaseController
{
	public function index($id=false)
	{
		// $faker = \Faker\Factory::create('id_ID');
		// dd($faker->company(10, true)." sebagai ".$faker->jobTitle());
		$key = $this->request->getVar('q');
		// dd($key);
		if($key==null):
			// dd("tidak dalam pencarian");
			$getKelas = $this->kelas->getKelas();
		else:
			$getKelas = $this->kelas->getKelas($key);
		endif;
		$data=[
			'title' => 'Kelas Belajar',
			'subtitle' => 'Daftar Kelas Belajar',
			'members' => $this->member->findAll(),
		];

		if(!($id==false)):
			$find=$this->kelas->getById($id);
			$data['kelas'] = $find;
			$data['title'] = $find['namaKelas'];
			$data['subtitle'] = $find['namaPengguna'];
			$data['materi'] = $this->materi->getMateriByKelasId($id);
			return view("/pages/admin/kelas/detailkelas",$data);
		else:
			$data['kelas'] = $getKelas;
			$data['pager']= $this->kelas->pager;
			return view("/pages/admin/kelas/kelas",$data);
		endif;
		

	}
}
