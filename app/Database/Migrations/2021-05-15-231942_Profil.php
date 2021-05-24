<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profil extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'  => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'namaOrganisasi'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'namaSingkat'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'selogan' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'nomorPengesahan' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'hp' => [
				'type'              => 'varchar',
                'constraint'        => '15',
			],
			'email' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'website' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'provinsi' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'kabupaten' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'kecamatan' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'desa' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'sekretariat'=>[
				'type'              => 'text',
			],
			'logo' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],
			'logoTopbar' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],

			'tglDaftar' => [
					'type' => 'DATETIME',
			],
			'tglUbah' => [
					'type' => 'DATETIME',
			],
			
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('profil');
	}

	public function down()
	{
		$this->forge->dropTable('profil');
	}
}
