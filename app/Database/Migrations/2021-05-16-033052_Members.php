<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Members extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idPengguna'  => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'namaDepan'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'namaBelakang'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'namaPengguna'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'email' => [
				'type'           => 'varchar',
				'constraint'     => '255',
			],
			'password' => [
				'type'              => 'varchar',
                'constraint'        => '255',
			],
			'komunitas' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'posisi' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'avatar' => [
					'type' => 'VARCHAR',
					'constraint' => '255'
			],
			'tglBuatPengguna' => [
					'type' => 'DATETIME',
			],
			'tglUbahPengguna' => [
					'type' => 'DATETIME',
			],
			
		]);

		$this->forge->addKey('idPengguna', true);
		$this->forge->createTable('pengguna');
	}

	public function down()
	{
		$this->forge->dropTable('pengguna');
	}
}
