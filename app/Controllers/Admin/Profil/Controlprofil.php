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
        $icontopbar = $this->request->getFile('icontopbar');

        // dd($icontopbar);
		foreach($posts as $post => $value):
            $data[$post] = htmlspecialchars($value);
        endforeach;

		$id=$this->request->getVar('id');
        $find = $this->profil->find($id);

        // kelola logo
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

        // kelola icon top bar 
		if($icontopbar->getSize() == 0):
            $data['logoTopbar'] = $find['logoTopbar'];
        else :
            $iconName = $icontopbar->getRandomName();
			$data['logoTopbar'] = $iconName;
            if($find['logoTopbar']=='icontopbar.png'):
                $icontopbar->move('assets/img/',$iconName);
            else:
                $icontopbar->move('assets/img/',$iconName);
                unlink('assets/img/'.$find['logoTopbar']);
            endif;
            
        endif;

        // dd($data);
		$simpan = $this->profil->save($data);        
		session()->setFlashdata('saved','Profil Berhasil Ubah..!');
		return redirect()->to('/admin/profil');
    }
}
