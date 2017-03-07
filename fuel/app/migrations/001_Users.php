<?php

namespace Fuel\Migrations;

class Users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'username' => array('constraint' => 255, 'type' => 'varchar'),
			'password' => array('constraint' => 255,'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'image' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
		\DB::query("ALTER TABLE `users` ADD UNIQUE(`email`)")->execute();
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}