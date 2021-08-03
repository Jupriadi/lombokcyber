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
			'newproject' => $this->project->getProject()->paginate(3),
			'newkelas' => $this->kelas->getKelas()->paginate(3),
			'randomArtikel' =>$this->artikel->orderBy('tglPublishArtikel','DESC')->first(),
			'artikelTerbaru'=>$this->artikel->orderBy('tglPublishArtikel','DESC')->paginate(3),
			'artikelPopuler'=>$this->artikel->orderBy('jumlahDibacaArtikel','DESC')->paginate(3),
			'jumArtikel'=>$this->artikel->get()->getNumRows(),
			'jumProject'=>$this->project->get()->getNumRows(),
			'jumKelas'=>$this->kelas->get()->getNumRows(),
			
		];
		
		return view('index',$data);
	}

	public function project($slug=false)
	{
		// dd($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
		// dd(urlencode(string $string));
		$data=[
			'title' => 'Profil Organisasi',
			'subtitle' => 'Profil Lengkap Organisasi',
			'profil' => $this->profil->first(),
		];

		if($slug==false):
			
			$data['listproject']=$this->project->getProject()->paginate(9);
			$data['pager']=$this->project->pager;
			return view('/pages/user/project/index',$data);
		else:
			// dd("hello");
			$find=$this->project->where('slugProject',$slug)->first();
			$dibaca=$find['jumlahDibacaProject']+1;
			$baca=[
				'idProject' => $find['idProject'],
				'jumlahDibacaProject'=>$dibaca,
			];

			$terbaca=$this->project->save($baca);
			$data['project']=$this->project->getBySlug($slug);
			$data['projectlain']=$this->project->getPopuler()->paginate(3);
			return view('/pages/user/project/detailproject',$data);
		endif;
		
	}

	public function kelas($slug=false)
	{
		$data=[
			'title' => 'Profil Organisasi',
			'subtitle' => 'Profil Lengkap Organisasi',
			'profil' => $this->profil->first(),
	
		];
        if(!$slug==false):
			$findKelas =$this->kelas->getBySlug($slug)->first();
            $data['kelas']=$findKelas;
			$data['materi'] = $this->materi->getMateriByKelasId($findKelas['idKelas']);
			$data['jumSiswa'] = $this->kelas->getJumSiswa($findKelas['idKelas']);
            return view('/pages/user/kelas/detailkelas',$data);
		else:
			$findKelas =$this->kelas->getBySlug($slug)->first();
			$data['kelasbelajar']=$this->kelas->getKelas()->paginate(9);
			$data['pager']=$this->kelas->pager;
	
			return view('/pages/user/kelas/index',$data);
        endif;
		
	}
	
	public function artikel($slug=false)
	{
		$data=[
			'title' => 'Profil Organisasi',
			'subtitle' => 'Profil Lengkap Organisasi',
			'profil' => $this->profil->first(),
		];

		if(!$slug==false)
		{
			$find=$this->artikel->where('slugArtikel',$slug)->first();
			$dibaca=$find['jumlahDibacaArtikel']+1;
			$baca=[
				'idArtikel' => $find['idArtikel'],
				'jumlahDibacaArtikel'=>$dibaca
			];

			$terbaca=$this->artikel->save($baca);
			$data['artikel']=$this->artikel->getArtikel($slug)->first();
			$data['artikellain']=$this->artikel->getArtikel()->paginate(5);
			return view('/pages/user/artikel/bacaArtikel',$data);
		}else{
			// dd("tampilkan banyak artikel");
			$data['randomArtikel']=$this->artikel->orderBy('tglPublishArtikel','DESC')->first();
			$data['artikelPopuler']=$this->artikel->orderBy('jumlahDibacaArtikel','DESC')->paginate(3);
			$data['artikelTerbaru']=$this->artikel->orderBy('tglPublishArtikel','DESC')->paginate(3);
			$data['artikel']=$this->artikel->getArtikel()->paginate(9);
			$data['pager']=$this->artikel->pager;
			return view('/pages/user/artikel/index',$data);
		}
		
	}
	public function hitungModul()
	{
		return "banyak modul";
	}
}
