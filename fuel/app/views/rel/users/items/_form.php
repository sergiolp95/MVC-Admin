<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Fk users', 'fk_users', array('class'=>'control-label')); ?>

				<?php echo Form::input('fk_users', Input::post('fk_users', isset($rel_users_item) ? $rel_users_item->fk_users : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fk users')); ?>

		</div>
		
		<div class="form-group">
			<?php echo Form::label('Fk items', 'fk_items', array('class'=>'control-label')); ?>

				<?php echo Form::input('fk_items', Input::post('fk_items', isset($rel_users_item) ? $rel_users_item->fk_items : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fk items')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>