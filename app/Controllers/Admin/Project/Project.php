<?php

namespace App\Controllers\Admin\Project;

use App\Controllers\BaseController;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Project extends BaseController
{
	public function index()
	{
		// $faker = \Faker\Factory::create('id_ID');

		// dd($faker->sentence(6));
		$data=[
			'title' => 'Project',
			'subtitle' => '',
			'projects' => $this->project->getProject(),
			'pager' =>$this->project->pager,
		];

		return view("/pages/admin/project/project",$data);
	}

	public function formproject($id=false)
	{
		$data=[
			'title' => 'Form Project',
			'subtitle' => 'Pastikan Project Yang di publis berisi tentang deskripsi dan fitur-fitur project yang lengkap',
			'validation' => \Config\Services::validation(),
		];

		if(!$id==false):
			$data['project']=$this->project->find($id);
			$data['edit']=1;
		else:
			$data['edit']=0;
		endif;

		return view("/pages/admin/project/formproject",$data);
	}
}
