<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModels extends Model
{
	protected $table                = 'project';
	protected $primaryKey           = 'idProject';
	protected $returnType           = 'array';
	protected $allowedFields        = [
					'penulisProject',
					'judulProject',
					'isiProject',
					'kategoryProject',
					'thumbnailProject',
					'tglPublishProject',
					'tglUpdateProject'
	];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'date';
	protected $createdField         = 'tglPublishProject';
	protected $updatedField         = 'tglUpdateProject';

	public function getProject()
	{
		return $this->orderBy('idProject', 'DESC')->paginate(8);
	}
}
