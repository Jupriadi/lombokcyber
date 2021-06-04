<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModels extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'materi';
	protected $primaryKey           = 'idMateri';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['idKelas','judulMateri'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tglBuatMateri';
	protected $updatedField         = 'tglUbahMateri';

	public function getMateriByKelasId($idKelas)
	{
		return $this->join('kelas','kelas.idKelas = materi.idKelas')
					->where('kelas.idKelas',$idKelas)
					->findAll();
	}


}
