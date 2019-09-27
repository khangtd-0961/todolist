<?php echo $this->Form->create(array('id'=>'appForm', 'inputDefaults'=>array('label'=>false, 'div'=>false))); ?>
<div class="form-group">
	<label>Ma Mon Hoc</label>
	<?php echo $this->Form->input('mamonhoc', array('class'=>'form-control')); ?>
</div>

<div class="form-group">
	<label>Ma Sinh Vien</label>
	<?php echo $this->Form->input('masinhvien', array('class'=>'form-control')); ?>
</div>
<div class="form-group">
	<label>Diem</label>
	<?php echo $this->Form->input('diem', array('class'=>'form-control')); ?>
</div>


<button type="submit" class="btn btn-default">Save</button>
<?php echo $this->Form->end();?>
