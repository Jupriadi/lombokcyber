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
					'slugProject',
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

	public function getProject($id=false)
	{
		if($id==false):
			return $this->join('users','users.id = project.penulisProject')->orderBy('idProject', 'DESC');
		else:
			return $this->join('users','users.id = project.penulisProject')->find($id);
		endif;
	}
	public function getBySlug($slug)
	{
		return $this->join('users','users.id = project.penulisProject')->where('slugProject', $slug)->first();
	}
	public function cariProject($key)
	{
		return $this->like('judulProject', $key)->join('users','users.id = project.penulisProject');
	}
}
