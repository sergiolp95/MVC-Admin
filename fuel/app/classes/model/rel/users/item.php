<?php
class Model_Rel_Users_Item extends Model_Crud
{
	protected static $_table_name = 'rel_users_items';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('fk_users', 'Fk Users', 'required|valid_string[numeric]');
		$val->add_field('fk_items', 'Fk Items', 'required|valid_string[numeric]');

		return $val;
	}

}
