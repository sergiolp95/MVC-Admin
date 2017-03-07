<?php
class Model_User extends Model_Crud
{
	protected static $_table_name = 'users';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'Username', 'required|max_length[255]');
		$val->add_field('password', 'Password', 'required');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('image', 'Image', 'required|max_length[255]');

		return $val;
	}

}
