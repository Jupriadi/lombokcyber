<?php

namespace App\Models;

use CodeIgniter\Model;

class AktifsiswaModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'aktifsiswa';
	protected $primaryKey           = 'idAktifSiswa';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['idKelas','idSiswa','aktifStatus'];

	// Dates
	protected $useTimestamps        = trus;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tglDaftar';
	protected $updatedField         = 'tglPerbarui';

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
