<?php

namespace App\Models;

use CodeIgniter\Model;

class ModulModels extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'modul';
	protected $primaryKey           = 'idModul';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
									'idMateri',
									'judulModul',
									'isiModul',
									'video'
								];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tglBuatModul';
	protected $updatedField         = 'tglUbahModul';


}
