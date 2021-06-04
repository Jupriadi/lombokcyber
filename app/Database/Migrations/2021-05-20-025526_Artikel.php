<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idArtikel'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'penulisArtikel'          => [
					'type'           => 'INT',
					'constraint'     => 5,
			],
			'judulArtikel'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'isiArtikel' => [
					'type' => 'TEXT',
			],
			'kategoryArtikel' => [
					'type' => 'TEXT',
			],
			'thumbnailArtikel' => [
					'type' => 'VARCHAR',
					'constraint' => '255'
			],
			'tglPublishArtikel' => [
					'type' => 'date',
			],
			'tglUpdateArtikel' => [
					'type' => 'date',
			],

		]);
		$this->forge->addKey('idArtikel', true);
		$this->forge->createTable('artikel');
	}

	public function down()
	{
		$this->forge->dropTable('artiel');
	}
}
