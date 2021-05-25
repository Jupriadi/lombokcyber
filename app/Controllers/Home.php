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
			'newproject' => $this->project->getProject()->paginate(6),
	
		];
		return view('index',$data);
	}

	public function project($slug=false)
	{
		$data=[
			'title' => 'Profil Organisasi',
			'subtitle' => 'Profil Lengkap Organisasi',
			'profil' => $this->profil->first(),
		];

		if($slug==false):
			$data['project']=$this->project->getProject();
			return view('/pages/user/project/index',$data);
		else:
			$data['project']=$this->project->getBySlug($slug);
			$data['projectlain']=$this->project->paginate($slug);
			return view('/pages/user/project/index',$data);
		endif;
		
	}

	public function kelas()
	{
		$data=[
			'title' => 'Profil Organisasi',
			'subtitle' => 'Profil Lengkap Organisasi',
			'profil' => $this->profil->first(),
	
		];
		return view('/pages/user/kelas/index',$data);
	}
}
