<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bayar extends Migration
{
	public function up(){

	$this->forge->addField([
		'id'=>[
			'type'=>'INT',
			'constraint'=>11,
			'unsigned'=>TRUE,
			'auto_increment'=>TRUE
		],
		'id_barang'=>[
			'type'=>'VARCHAR',
			'constraint'=>15,
			'unsigned'=>TRUE,
			'auto_increment'=>TRUE
		],
		'nama_pemesan'=>[
			'type'=>'TEXT',
			'constraint'=>30,
		],
		'bayar_via'=>[
			'type'=>'TEXT',
			'constraint'=>11,
		],
		'an_rekeningtrx'=>[
			'type'=>'TEXT',
			'constraint'=>30,
		],
		'tgl_trx'=>[
			'type'=>'TEXT',
			'constraint'=>30,	
		],
		'jam_trx'=>[
			'type'=>'TEXT',
			'constraint'=>30,	
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
		$this->forge->createTable('bayar');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('bayar');
	}
}
