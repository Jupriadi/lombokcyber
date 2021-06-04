<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aktifsiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idAktifSiswa'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'idKelas'          => [
					'type'           => 'INT',
					'constraint'     => 5,
			],
			'idSiswa'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'aktifStatus'       => [
					'type'       => 'int',
					'constraint' => 1,
					'default'=>0,
			],
			'tglDaftar' => [
					'type' => 'datetime',
			],
			'tglPerbarui' => [
					'type' => 'datetime',
			],

		]);
		$this->forge->addKey('idAktifSiswa', true);
		$this->forge->createTable('AktifSiswa');
	}

	public function down()
	{
		$this->forge->dropTable('AktifSiswa');
	}
}
