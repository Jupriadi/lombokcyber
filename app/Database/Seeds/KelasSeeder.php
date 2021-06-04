<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i=1;$i<=10;$i++):
			$namakelas =  $faker->sentence(6);
			$slug = url_title($namakelas, '-', TRUE);
			$data =[
				'idKelas' => $faker->randomNumber(5, true),
				'namaKelas'  => $namakelas,
				'slugKelas'	=> $slug,
				'levelKelas'  => "Pemula",
				'tentangKelas' => $faker->sentence(25),
				'biaya' => $faker->randomNumber(6, true),
				'mentor' => 1,
				'thumbnailKelas' => 'kelas.jpg',
				'tglBuatKelas' => date("Y-m-d"),
				'tglUbahKelas' => date("Y-m-d"),			
			];

			$this->db->table('kelas')->insert($data);
		endfor;
	}
}
