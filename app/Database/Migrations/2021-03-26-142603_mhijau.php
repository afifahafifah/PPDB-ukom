<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mhijau extends Migration
{
	public function up()
	{
			$this->forge->addField([
			'id'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			],
			'nama'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'gambar'=>[
				'type'=>'TEXT',
			],
			'jenis'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'nisn'=>[
				'type'=>'VARCHAR',
				'constraint'=>11,	
			],
			'lahir'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'nohp'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'alamat'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'agama'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'bing'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'mtk'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'status'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],


			'created_by'=>[
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_date'=>[
				'type' => 'DATETIME',
			],
			'updated_by'=>[
				'type' => 'INT',
				'constraint' => 11,
				'null' => TRUE,
			],
			'updated_date'=>[
				'type'=>'DATETIME',
				'null'=>TRUE,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('mhijau');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('mhijau');
	}
}
