<?php

namespace Fuel\Migrations;

class enemies
{
	public function up()
	{
		\DBUtil::create_table('enemies', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'description' => array('constraint' => 255, 'type' => 'varchar'),
			'image' => array('constraint' => 255, 'type' => 'varchar'),
			'health' => array('constraint' => 11, 'type' => 'int'),
			'attack' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('enemies');
	}
}