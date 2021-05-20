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


	public function getKelas($key=false)
	{
		if(!($key==false)):
			return $this->like('namaKelas', $key)->paginate(8);
		else:
			return $this->orderBy('tglBuatKelas', 'DESC')->paginate(8);
		endif;
	}

	public function getById($id)
	{
		return $this->join('pengguna','pengguna.idPengguna = kelas.mentor')->where('idKelas',$id)->first();
	}

	public function getMateri($idKelas)
	{
		return $this->join('materi','materi.idKelas = kelas.idKelas')->where('kelas.idKelas',$idKelas)->findAll();
	}
}
