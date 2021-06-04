<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Artikel extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i=1;$i<=30;$i++):
			$judul = $faker->sentence(6);
			$slug = url_title($judul, '-', TRUE);

			$data = [
				'penulisArtikel'          => 1,
				'judulArtikel'       => $judul,
				'slugArtikel' => $slug,
				'isiArtikel' => $faker->sentence(500),
				'kategoryArtikel' => "#".$faker->word,
				'thumbnailArtikel' => "artikel.jpg",
				'tglPublishArtikel' => date("Y-m-d"),
				'tglUpdateArtikel' => date("Y-m-d"),
			];

			// Using Query Builder
			$this->db->table('artikel')->insert($data);
		endfor;
	}
}
