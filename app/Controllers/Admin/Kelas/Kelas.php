<?php

namespace App\Controllers\Admin\Kelas;

use App\Controllers\BaseController;

class Kelas extends BaseController
{
	public function index($id=false)
	{
		
		$key = $this->request->getVar('q');

		if($key==null):
			$kelas = $this->kelas->getKelas();
		else:
			$kelas = $this->kelas->cariKelas($key);
		endif;
		

		if(!(user()->status=="admin")):
			$getKelas= $kelas->where('mentor', user()->id);
		else:
			$getKelas =$kelas;
		endif;

		$data=[
			'title' => 'Kelas Belajar',
			'subtitle' => 'Daftar Kelas Belajar',
			'members' => $this->user->where('active',1)->findAll(),
		];

		if(!($id==false)):
			$find=$this->kelas->getKelas($id);
			$data['kelas'] = $find;
			$data['title'] = $find['namaKelas'];
			// $data['subtitle'] = $find['username'];
			$data['materi'] = $this->materi->getMateriByKelasId($id);
			return view("/pages/admin/kelas/detailkelas",$data);
		else:
			$data['kelas'] = $getKelas->paginate(8);
			$data['pager']= $this->kelas->pager;
			return view("/pages/admin/kelas/kelas",$data);
		endif;
		

	}
}
