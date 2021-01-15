<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materikuliah extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id_materi'          => [
				'type'           => 'INT',
				'constraint'     => '100',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
			],
			'bab'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'penjelasan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'file' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
		]);
		$this->forge->addKey('id_materi', TRUE);
		$this->forge->createTable('materikuliah');
	}

	public function down()
	{
		$this->forge->dropTable('materikuliah');
	}
}