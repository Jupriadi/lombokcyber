<?php

namespace App\Controllers\Admin\Kelas;

use App\Controllers\BaseController;

class Controlmateri extends BaseController
{


	public function hapus($id)
	{
        $find = $this->materi->find($id);

        $this->materi->delete($id);
        session()->setFlashdata('deleted','Materi Berhasil Dihapus..!');
        return redirect()->back();
	}
	
	public function tambahmateri()
	{
		$data=[];
		$posts = $this->request->getPost();

		foreach($posts as $post => $value):
            $data[$post] = htmlspecialchars($value);
        endforeach;
		$data['idMateri'] = mt_rand(10000, 99999);
		// dd($posts['idKelas']);

		$this->materi->insert($data);
		session()->setFlashdata('saved','Materi Baru Berhasil Ditambah..!');
        return redirect()->to('/admin/kelas/'.$posts['idKelas']);
	}

	public function simpanmodul()
	{
		$data=[];
		$posts = $this->request->getPost();

		foreach($posts as $post => $value):
            $data[$post] = htmlspecialchars($value);
        endforeach;

		$data['idModul'] = mt_rand(10000, 99999);
		$this->modul->insert($data);

		session()->setFlashdata('saved','Modul Baru Berhasil Ditambah..!');
        return redirect()->back();
		
	}
}
