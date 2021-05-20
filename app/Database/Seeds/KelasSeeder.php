<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i=1;$i<=10;$i++):

			$data =[
				'idKelas' => $faker->randomNumber(5, true),
				'namaKelas'  => $faker->sentence(6),
				'levelKelas'  => "Pemula",
				'tentangKelas' => $faker->sentence(25),
				'biaya' => $faker->randomNumber(6, true),
				'mentor' => $faker->name(),
				'thumbnailKelas' => 'kelas.jpg',
				'tglBuatKelas' => date("Y-m-d"),
				'tglUbahKelas' => date("Y-m-d"),			
			];

			$this->db->table('kelas')->insert($data);
		endfor;
	}
}
