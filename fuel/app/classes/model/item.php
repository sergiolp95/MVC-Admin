<?php
class Model_Item extends Model_Crud
{
	protected static $_table_name = 'items';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required|max_length[255]');
		$val->add_field('image', 'Image', 'required|max_length[255]');
		$val->add_field('prize', 'Prize', 'required|valid_string[numeric]');

		return $val;
	}

}
