<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfilSeeder extends Seeder
{
	public function run()
	{
		$data =[
			'namaOrganisasi'  => "RinjaniDEV",
			'namaSingkat'  => "Rinjani Developer",
			'selogan' => "Lear to be a future people",
			'nomorPengesahan' => "123456789",
			'hp' => "+62 823 3951 3607",
			'email' => "rinjani@dev.org.id",
			'website' => "rinjanidev.com",
			'provinsi' => "Nusa Tenggara Barat",
			'kabupaten' => "Lombok Timur",
			'kecamatan' => "Sembalun",
			'desa' => "Sembalun Bumbung",
			'sekretariat'=>'Jl. Batar Guru, Desa Sembalun Bumbung, Kec. Sembalun Lombok Timur',
			'logo' => 'logo.png',

			'tglDaftar' => date("Y-m-d"),
			'tglUbah' => date("Y-m-d"),
		
		];

		$this->db->table('profil')->insert($data);
	}
}
