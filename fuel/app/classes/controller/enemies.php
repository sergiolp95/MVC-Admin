<?php
class Controller_Enemies extends Controller_Template
{

	public function action_index()
	{
		$data['enemies'] = Model_Enemy::find_all();
		$this->template->title = "Enemies";
		$this->template->content = View::forge('enemies/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('enemies');

		$data['enemy'] = Model_Enemy::find_by_pk($id);

		$this->template->title = "Enemy";
		$this->template->content = View::forge('enemies/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Enemy::validate('create');

			if ($val->run())
			{
				$enemy = Model_Enemy::forge(array(
					'name' => Input::post('name'),
					'description' => Input::post('description'),
					'image' => Input::post('image'),
					'health' => Input::post('health'),
					'attack' => Input::post('attack'),
				));

				if ($enemy and $enemy->save())
				{
					Session::set_flash('success', 'Added enemy #'.$enemy->id.'.');
					Response::redirect('enemies');
				}
				else
				{
					Session::set_flash('error', 'Could not save enemy.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Enemies";
		$this->template->content = View::forge('enemies/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('enemies');

		$enemy = Model_Enemy::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Enemy::validate('edit');

			if ($val->run())
			{
				$enemy->name = Input::post('name');
				$enemy->description = Input::post('description');
				$enemy->image = Input::post('image');
				$enemy->health = Input::post('health');
				$enemy->attack = Input::post('attack');

				if ($enemy->save())
				{
					Session::set_flash('success', 'Updated enemy #'.$id);
					Response::redirect('enemies');
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

		$this->template->set_global('enemy', $enemy, false);
		$this->template->title = "Enemies";
		$this->template->content = View::forge('enemies/edit');

	}

	public function action_delete($id = null)
	{
		if ($enemy = Model_Enemy::find_one_by_id($id))
		{
			$enemy->delete();

			Session::set_flash('success', 'Deleted enemy #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete enemy #'.$id);
		}

		Response::redirect('enemies');

	}

}
