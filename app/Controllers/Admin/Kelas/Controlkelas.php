<?php

namespace App\Controllers\Admin\Kelas;

use App\Controllers\BaseController;

class Controlkelas extends BaseController
{
	public function simpankelas($id=false)
	{
		$data=[];
		$posts = $this->request->getPost();
        $photo = $this->request->getFile('logo');

		foreach($posts as $post => $value):
            $data[$post] = htmlspecialchars($value);
        endforeach;
		// dd($data);

		if(!($id == false)):
            $data['idKelas'] = $id;
            $find = $this->kelas->find($id);
            if($photo == ""):
                $data['thumbnailKelas'] = $find['thumbnailKelas'];
            else:
                $namaphoto = $photo->getRandomName();
                $data['thumbnailKelas'] = $namaphoto;
                if(!($find['thumbnailKelas']=='kelas.jpg')):
                    unlink('assets/img/kelas_thumnail/'.$find['thumbnailKelas']);
                endif;
                $photo->move('assets/img/kelas_thumbnail/',$namaphoto);
            endif;

        else:
            if($photo == ""):
                $data['thumbnailKelas'] = 'kelas.jpg';
            else:
                $namaphoto = $photo->getRandomName();
                $data['thumbnailKelas'] = $namaphoto;
                $photo->move('assets/img/kelas_thumbnail/',$namaphoto);
            endif;

        endif;

		$simpan = $this->kelas->save($data);        
		session()->setFlashdata('saved','Kelas Baru Berhasil Disimpan..!');
		return redirect()->to('/admin/kelas');

	}


	public function hapus($id)
	{
        $find = $this->kelas->find($id);
        // dd($find);
        if(!($find['thumbnailKelas'] == 'kelas.jpg')){
            unlink('assets/img/kelas_thumbnail/'.$find['thumbnailKelas']);
        }

        $this->kelas->delete($id);
        session()->setFlashdata('deleted','Kelas Berhasil Dihapus..!');
        return redirect()->to('/admin/kelas');
	}

}
