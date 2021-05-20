<?php

namespace App\Controllers\Admin\Profil;

use App\Controllers\BaseController;

class Controlprofil extends BaseController
{
	public function ubahprofil()
	{

		$data=[];
		$posts = $this->request->getPost();
        $logo = $this->request->getFile('logo');

		foreach($posts as $post => $value):
            $data[$post] = htmlspecialchars($value);
        endforeach;

		$id=$this->request->getVar('id');
        $find = $this->profil->find($id);

		if($logo->getSize() == 0):
            $data['logo'] = $find['logo'];
        else :
            $logoname = $logo->getRandomName();
			$data['logo'] = $logoname;
            if($find['logo']=='logo.png'):
                $logo->move('assets/img/',$logoname);
            else:
                $logo->move('assets/img/',$logoname);
                unlink('assets/img/'.$find['logo']);
            endif;
            
        endif;
        // dd($data);
		$simpan = $this->profil->save($data);        
		session()->setFlashdata('saved','Profil Berhasil Ubah..!');
		return redirect()->to('/admin/profil');
    }
}
