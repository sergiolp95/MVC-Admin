<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Stages', 'stages', array('class'=>'control-label')); ?>

				<?php echo Form::input('stages', Input::post('stages', isset($stage) ? $stage->stages : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Stages')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>