<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModels extends Model
{
	protected $table                = 'kelas';
	protected $primaryKey           = 'idkelas';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $protectFields        = true;
	protected $allowedFields        = [
						'namaKelas',
						'levelKelas',
						'tentangKelas',
						'biaya',
						'mentor',
						'thumbnailKelas',
					];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tglBuatKelas';
	protected $updatedField         = 'tglUbahKelas';


	public function getKelas($id=false)
	{
		if(!($id==false)):
			return $this->find($id);
		else:
			return $this->join('users','users.id = kelas.mentor')->orderBy('tglBuatKelas', 'DESC');
		endif;
	}

	public function cariKelas($key)
	{
		return $this->join('users','users.id = kelas.mentor')->like('namaKelas', $key)->orderBy('tglBuatKelas', 'DESC');
	}

	public function getMateri($idKelas)
	{
		return $this->join('materi','materi.idKelas = kelas.idKelas')->where('kelas.idKelas',$idKelas)->findAll();
	}
}
