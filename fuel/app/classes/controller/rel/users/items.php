<?php
class Controller_Rel_Users_Items extends Controller_Template
{

	public function action_index()
	{
		$data['rel_users_items'] = Model_Rel_Users_Item::find_all();
		$this->template->title = "Rel_users_items";
		$this->template->content = View::forge('rel/users/items/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('rel/users/items');

		$data['rel_users_item'] = Model_Rel_Users_Item::find_by_pk($id);

		$this->template->title = "Rel_users_item";
		$this->template->content = View::forge('rel/users/items/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Rel_Users_Item::validate('create');

			if ($val->run())
			{
				$rel_users_item = Model_Rel_Users_Item::forge(array(
					'fk_users' => Input::post('fk_users'),
					'fk_items' => Input::post('fk_items'),
				));

				if ($rel_users_item and $rel_users_item->save())
				{
					Session::set_flash('success', 'Added rel_users_item #'.$rel_users_item->id.'.');
					Response::redirect('rel/users/items');
				}
				else
				{
					Session::set_flash('error', 'Could not save rel_users_item.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Rel_Users_Items";
		$this->template->content = View::forge('rel/users/items/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('rel/users/items');

		$rel_users_item = Model_Rel_Users_Item::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Rel_Users_Item::validate('edit');

			if ($val->run())
			{
				$rel_users_item->fk_users = Input::post('fk_users');
				$rel_users_item->fk_items = Input::post('fk_items');

				if ($rel_users_item->save())
				{
					Session::set_flash('success', 'Updated rel_users_item #'.$id);
					Response::redirect('rel/users/items');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->set_global('rel_users_item', $rel_users_item, false);
		$this->template->title = "Rel_users_items";
		$this->template->content = View::forge('rel/users/items/edit');

	}

	public function action_delete($id = null)
	{
		if ($rel_users_item = Model_Rel_Users_Item::find_one_by_id($id))
		{
			$rel_users_item->delete();

			Session::set_flash('success', 'Deleted rel_users_item #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete rel_users_item #'.$id);
		}

		Response::redirect('rel/users/items');

	}

}
