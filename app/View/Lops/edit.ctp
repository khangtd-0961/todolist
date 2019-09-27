<?php echo $this->Form->create(array('id'=>'appForm', 'inputDefaults'=>array('label'=>false, 'div'=>false))); ?>
<div class="form-group">
	<label>Ma Lop</label>
	<?php echo $this->Form->input('malop', array('class'=>'form-control')); ?>
</div>

<div class="form-group">
	<label>Ten Lop</label>
	<?php echo $this->Form->input('tenlop', array('class'=>'form-control')); ?>
</div>
<button type="submit" class="btn btn-default">Save</button>
<?php echo $this->Form->end();?>
