<?php

namespace Fuel\Migrations;

class Rel_users_items
{
	public function up()
	{
		\DBUtil::create_table('rel_users_items', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'fk_users' => array('constraint' => 11, 'type' => 'int'),
			'fk_items' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('rel_users_items');
	}
}