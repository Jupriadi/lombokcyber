<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModels extends Model
{
	protected $table                = 'profil';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
			'namaOrganisasi',
			'namaSingkat',
			'selogan',
			'nomorPengesahan' ,
			'hp',
			'email',
			'website',
			'provinsi',
			'kabupaten',
			'kecamatan',
			'desa',
			'sekretariat',
			'logo',
			'tglDaftar',
			'tglUbah',
	];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tglDaftar';
	protected $updatedField         = 'tglUbah';
}
