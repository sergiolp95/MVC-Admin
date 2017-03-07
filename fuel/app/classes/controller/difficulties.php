<?php
class Controller_Difficulties extends Controller_Template
{

	public function action_index()
	{
		$data['difficulties'] = Model_Difficulty::find_all();
		$this->template->title = "Difficulties";
		$this->template->content = View::forge('difficulties/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('difficulties');

		$data['difficulty'] = Model_Difficulty::find_by_pk($id);

		$this->template->title = "Difficulty";
		$this->template->content = View::forge('difficulties/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Difficulty::validate('create');

			if ($val->run())
			{
				$difficulty = Model_Difficulty::forge(array(
					'name' => Input::post('name'),
					'description' => Input::post('description'),
					'image' => Input::post('image'),
				));

				if ($difficulty and $difficulty->save())
				{
					Session::set_flash('success', 'Added difficulty #'.$difficulty->id.'.');
					Response::redirect('difficulties');
				}
				else
				{
					Session::set_flash('error', 'Could not save difficulty.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Difficulties";
		$this->template->content = View::forge('difficulties/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('difficulties');

		$difficulty = Model_Difficulty::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Difficulty::validate('edit');

			if ($val->run())
			{
				$difficulty->name = Input::post('name');
				$difficulty->description = Input::post('description');
				$difficulty->image = Input::post('image');

				if ($difficulty->save())
				{
					Session::set_flash('success', 'Updated difficulty #'.$id);
					Response::redirect('difficulties');
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

		$this->template->set_global('difficulty', $difficulty, false);
		$this->template->title = "Difficulties";
		$this->template->content = View::forge('difficulties/edit');

	}

	public function action_delete($id = null)
	{
		if ($difficulty = Model_Difficulty::find_one_by_id($id))
		{
			$difficulty->delete();

			Session::set_flash('success', 'Deleted difficulty #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete difficulty #'.$id);
		}

		Response::redirect('difficulties');

	}

}
