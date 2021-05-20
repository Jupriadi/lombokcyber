<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Modul extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idModul'  => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],

			'idMateri'  => [
					'type'       => 'INT',
					'constraint' => 10,
			],
			'judulModul' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'isiModul' => [
				'type'              => 'text',
			],
			'video' => [
				'type'              => 'text',
			],
			'tglBuatModul' => [
					'type' => 'DATETIME',
			],
			'tglUbahModul' => [
					'type' => 'DATETIME',
			],
			
		]);

		$this->forge->addKey('idModul', true);
		$this->forge->createTable('modul');
	}

	public function down()
	{
		$this->forge->dropTable('modul');
	}
}
