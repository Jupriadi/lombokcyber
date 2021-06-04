<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectSeeder extends Seeder
{
	public function run()
    {
		$faker = \Faker\Factory::create('id_ID');
		for($i=1;$i<=30;$i++):
			$judul = $faker->sentence(6);
			$slug = url_title($judul, '-', TRUE);

			$data = [
					
				'penulisProject'          => 1,
				'judulProject'       => $judul,
				'slugProject'	=> $slug,
				'isiProject' => $faker->sentence(200),
				'kategoryProject' => "#"."codeigntir_project",
				'thumbnailProject' => "project.jpg",
				'jumlahDibacaProject' => 0,
				'tglPublishProject' => date("Y-m-d"),
				'tglUpdateProject' => date("Y-m-d"),
			];

			// Using Query Builder
			$this->db->table('project')->insert($data);
		endfor;
    }
}
