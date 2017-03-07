<?php
class Model_Difficulty extends Model_Crud
{
	protected static $_table_name = 'difficulties';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required|max_length[255]');
		$val->add_field('image', 'Image', 'required|max_length[255]');

		return $val;
	}

}
