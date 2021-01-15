<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absensi extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 100,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 255
			],
			'npm'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 255
			],
			'keterangan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('absensi');
	}

	public function down()
	{
		$this->forge->dropTable('absensi');
	}
}