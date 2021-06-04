<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idKelas'  => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],

			'namaKelas'  => [
					'type'       => 'VARCHAR',
					'constraint' => '255',
			],
			'slugKelas'  => [
					'type'       => 'VARCHAR',
					'constraint' => '255',
			],
			'levelKelas'  => [
					'type'       => 'VARCHAR',
					'constraint' => '50',
			],
			'tentangKelas' => [
				'type'              => 'text',
			],
			'biaya' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'mentor' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'thumbnailKelas' => [
					'type' => 'VARCHAR',
					'constraint' => '255'
			],
			'tglBuatKelas' => [
					'type' => 'DATETIME',
			],
			'tglUbahKelas' => [
					'type' => 'DATETIME',
			],
			
		]);

		$this->forge->addKey('idKelas', true);
		$this->forge->createTable('kelas');
	}

	public function down()
	{
		//
	}
}
