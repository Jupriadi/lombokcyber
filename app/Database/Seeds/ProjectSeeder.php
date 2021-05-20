<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectSeeder extends Seeder
{
	public function run()
    {
		$faker = \Faker\Factory::create('id_ID');
		for($i=1;$i<=30;$i++):
			$data = [
					
				'penulisProject'          => $faker->randomNumber(6, true),
				'judulProject'       => $faker->sentence(6),
				'isiProject' => $faker->sentence(200),
				'kategoryProject' => "#".$faker->word,
				'thumbnailProject' => "project.jpg",
				'tglPublishProject' => date("Y-m-d"),
				'tglUpdateProject' => date("Y-m-d"),
			];

			// Using Query Builder
			$this->db->table('project')->insert($data);
		endfor;
    }
}
