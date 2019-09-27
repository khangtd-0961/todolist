<?php echo $this->Form->create(array('id'=>'appForm', 'inputDefaults'=>array('label'=>false, 'div'=>false))); ?>
	<div class="form-group">
		<label>Username</label>
		<?php echo $this->Form->input('username', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<label>Email</label>
		<?php echo $this->Form->input('email', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<label>Full name</label>
		<?php echo $this->Form->input('role', array(
			'options' => array('admin' => 'Admin', 'author' => 'Author')
		)); ?>
	</div>

	<button type="submit" class="btn btn-default">Save</button>
<?php echo $this->Form->end();?>
