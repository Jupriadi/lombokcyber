<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idMateri'  => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],

			'idKelas'  => [
					'type'       => 'VARCHAR',
					'constraint' => '255',
			],
			'judulMateri' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'tglBuatMateri' => [
					'type' => 'DATETIME',
			],
			'tglUbahMateri' => [
					'type' => 'DATETIME',
			],
			
		]);

		$this->forge->addKey('idMateri', true);
		$this->forge->createTable('materi');
	}

	public function down()
	{
		$this->forge->dropTable('materi');
	}
}
