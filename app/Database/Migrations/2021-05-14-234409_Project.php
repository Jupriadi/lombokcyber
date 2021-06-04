<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idProject'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'penulisProject'          => [
					'type'           => 'INT',
					'constraint'     => 5,
			],
			'judulProject'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'slugProject'       => [
					'type'       => 'TEXT'
			],
			'isiProject' => [
					'type' => 'TEXT',
			],
			'kategoryProject' => [
					'type' => 'TEXT',
			],
			'thumbnailProject' => [
					'type' => 'VARCHAR',
					'constraint' => '255'
			],
			'tglPublishProject' => [
					'type' => 'date',
			],
			'tglUpdateProject' => [
					'type' => 'date',
			],

		]);
		$this->forge->addKey('idProject', true);
		$this->forge->createTable('project');
	}

	public function down()
	{
		$this->forge->dropTable('project');
	}
}
