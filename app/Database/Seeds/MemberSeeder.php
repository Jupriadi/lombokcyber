<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MemberSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i=1;$i<=10;$i++):
			$firstname = $faker->firstname();
			$lastname = $faker->lastname();
			$data =[
				'idPengguna'  => $faker->randomNumber(5, true),
				'namaDepan'  => $firstname,
				'namaBelakang'  => $lastname,
				'namaPengguna'  => $firstname."-DEV",
				'email' => $faker->email(),
				'password' => $faker->password(),
				'komunitas' => $faker->company(),
				'posisi' => $faker->jobTitle(),
				'avatar' => 'user.png',
				'tglBuatPengguna' => date("Y-m-d"),
				'tglUbahPengguna' => date("Y-m-d"),			
			];

			$this->db->table('pengguna')->insert($data);
		endfor;
	}
}
