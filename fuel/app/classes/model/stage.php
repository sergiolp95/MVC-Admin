<?php
class Model_Stage extends Model_Crud
{
	protected static $_table_name = 'stages';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('stages', 'Stages', 'required|max_length[255]');

		return $val;
	}

}
