<?php
class Controller_Stages extends Controller_Template
{

	public function action_index()
	{
		$data['stages'] = Model_Stage::find_all();
		$this->template->title = "Stages";
		$this->template->content = View::forge('stages/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('stages');

		$data['stage'] = Model_Stage::find_by_pk($id);

		$this->template->title = "Stage";
		$this->template->content = View::forge('stages/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Stage::validate('create');

			if ($val->run())
			{
				$stage = Model_Stage::forge(array(
					'stages' => Input::post('stages'),
				));

				if ($stage and $stage->save())
				{
					Session::set_flash('success', 'Added stage #'.$stage->id.'.');
					Response::redirect('stages');
				}
				else
				{
					Session::set_flash('error', 'Could not save stage.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Stages";
		$this->template->content = View::forge('stages/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('stages');

		$stage = Model_Stage::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Stage::validate('edit');

			if ($val->run())
			{
				$stage->stages = Input::post('stages');

				if ($stage->save())
				{
					Session::set_flash('success', 'Updated stage #'.$id);
					Response::redirect('stages');
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

		$this->template->set_global('stage', $stage, false);
		$this->template->title = "Stages";
		$this->template->content = View::forge('stages/edit');

	}

	public function action_delete($id = null)
	{
		if ($stage = Model_Stage::find_one_by_id($id))
		{
			$stage->delete();

			Session::set_flash('success', 'Deleted stage #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete stage #'.$id);
		}

		Response::redirect('stages');

	}

}
