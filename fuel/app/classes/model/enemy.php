<?php
class Model_Enemy extends Model_Crud
{
	protected static $_table_name = 'enemies';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required|max_length[255]');
		$val->add_field('image', 'Image', 'required|max_length[255]');
		$val->add_field('health', 'Health', 'required|valid_string[numeric]');
		$val->add_field('attack', 'Attack', 'required|valid_string[numeric]');

		return $val;
	}

}
