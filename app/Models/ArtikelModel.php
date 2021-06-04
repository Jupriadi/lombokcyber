<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
	protected $table                = 'artikel';
	protected $primaryKey           = 'idArtikel';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
											'penulisArtikel','judulArtikel','isiArtikel','kategoryArtikel','thumbnailArtikel','jumlahDibacaArtikel','slugArtikel',
									];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tglPublishArtikel';
	protected $updatedField         = 'tglUpdateArtikel';

	public function getArtikel($slug=false)
	{
		if(!$slug==false):
			return $this->join('users','users.id = artikel.penulisArtikel')->where('slugArtikel', $slug);
		endif;


		return $this->join('users','users.id = artikel.penulisArtikel')->orderBy('tglPublishArtikel', 'DESC');
	}
	public function cariArtikel($key)
	{
		return $this->like('judulArtikel', $key);
	}

}
