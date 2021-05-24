<?php

namespace App\Controllers\Admin\Artikel;

use App\Controllers\BaseController;

class Controlartikel extends BaseController
{
	public function simpanartikel($id=false)
	{
		$data=[];
		$posts = $this->request->getPost();
        $photo = $this->request->getFile('thumbnail');
		$data['isiArtikel']=$posts['isiArtikel'];
		foreach($posts as $post => $value):
            if($post == 'isiArtikel')continue;
            $data[$post] = htmlspecialchars($value);
        endforeach;

		if(!($id == false)):
            $data['idArtikel'] = $id;
            $find = $this->artikel->find($id);
            if($photo == ""):
                $data['thumbnailArtikel'] = $find['thumbnailArtikel'];
            else:
                $namaphoto = $photo->getRandomName();
                $data['thumbnailArtikel'] = $namaphoto;
                if(!($find['thumbnailArtikel']=='artikel.png')):
                    unlink('assets/img/artikel_thumbnail/'.$find['thumbnailArtikel']);
                endif;
                $photo->move('assets/img/artikel_thumbnail/',$namaphoto);
            endif;

        else:
            if($photo == ""):
                $data['thumbnailArtikel'] = 'artikel.png';
            else:
                $namaphoto = $photo->getRandomName();
                $data['thumbnailArtikel'] = $namaphoto;
                $photo->move('assets/img/artikel_thumbnail/',$namaphoto);
            endif;

        endif;

        // dd($data);

		$simpan = $this->artikel->save($data);        
		session()->setFlashdata('saved','Artikel Berhasil Disimpan..!');
		return redirect()->to('/admin/artikel');

	}
}
