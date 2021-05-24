<?php

namespace App\Controllers\Admin\Artikel;

use App\Controllers\BaseController;

class Artikel extends BaseController
{
	public function index()
	{
		$key = $this->request->getVar('q');
		if($key==null):
			$getArtikel = $this->artikel->getArtikel();
		else:
			$getArtikel = $this->artikel->cariArtikel($key);
		endif;

		$data=[
			'title' => 'Artikel',
			'subtitle' => 'Data Artikel',
			'artikel' => $getArtikel,
			'pager' =>$this->artikel->pager,
		];

		return view("/pages/admin/artikel/artikel",$data);
	}

	public function formartikel($id=false)
	{
		$data=[
			'title' => 'Form Artikel',
			'subtitle' => '',
			'validation' => \Config\Services::validation(),
			'members' => $this->user->where('active',1)->findAll(),
		];

		if(!$id==false):
			$data['artikel']=$this->find($id);
			$data['edit']=1;
		else:
			$data['edit']=0;
		endif;

		return view("/pages/admin/artikel/formartikel",$data);
	}
}
