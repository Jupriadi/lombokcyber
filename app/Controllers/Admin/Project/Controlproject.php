<?php

namespace App\Controllers\Admin\Project;

use App\Controllers\BaseController;

class Controlproject extends BaseController
{
	public function index()
	{
		dd("controlproject");
	}

	public function simpanproject($id=false)
	{
		$data=[];
		$posts = $this->request->getPost();
        $photo = $this->request->getFile('thumbnail');

		foreach($posts as $post => $value):
            if($post == 'daftar')continue;
            $data[$post] = htmlspecialchars($value);
        endforeach;
		// dd($photo);

		if(!($id == false)):
            $data['idProject'] = $id;
            $find = $this->project->find($id);
            if($photo == ""):
                $data['thumbnailProject'] = $find['thumbnailProject'];
            else:
                $namaphoto = $photo->getRandomName();
                $data['thumbnailProject'] = $namaphoto;
                if(!($find['thumbnailProject']=='project.jpg')):
                    unlink('assets/img/project_thumbnail/'.$find['thumbnailProject']);
                endif;
                $photo->move('assets/img/project_thumbnail/',$namaphoto);
            endif;

        else:
            if($photo == ""):
                $data['thumbnailProject'] = 'project.jpg';
            else:
                $namaphoto = $photo->getRandomName();
                $data['thumbnailProject'] = $namaphoto;
                $photo->move('assets/img/project_thumbnail/',$namaphoto);
            endif;

        endif;

		$simpan = $this->project->save($data);        
		session()->setFlashdata('saved','Project Berhasil Disimpan..!');
		return redirect()->to('/admin/project');

	}

	public function hapus($id)
	{
		
        $find = $this->project->find($id);
        // dd($find);
        if(!($find['thumbnailProject'] == 'project.jpg')){
            unlink('assets/img/project_thumbnail/'.$find['thumbnailProject']);
        }

        $this->project->delete($id);
        session()->setFlashdata('deleted','Project Berhasil Dihapus..!');
        return redirect()->to('/admin/project');
	}
}
