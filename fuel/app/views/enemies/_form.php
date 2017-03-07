<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($enemy) ? $enemy->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Description', 'description', array('class'=>'control-label')); ?>

				<?php echo Form::input('description', Input::post('description', isset($enemy) ? $enemy->description : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Description')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Image', 'image', array('class'=>'control-label')); ?>

				<?php echo Form::input('image', Input::post('image', isset($enemy) ? $enemy->image : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Image')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Health', 'health', array('class'=>'control-label')); ?>

				<?php echo Form::input('health', Input::post('health', isset($enemy) ? $enemy->health : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Health')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Attack', 'attack', array('class'=>'control-label')); ?>

				<?php echo Form::input('attack', Input::post('attack', isset($enemy) ? $enemy->attack : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Attack')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>