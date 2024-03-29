
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Add</h2>
	<!-- app/View/Users/add.ctp -->
	<?php echo $this->Form->create(array('id'=>'appForm', 'inputDefaults'=>array('label'=>false, 'div'=>false))); ?>
	<div class="form-group">
		<label>Ma Mon Hoc</label>
		<?php echo $this->Form->input('mamonhoc', array('class'=>'form-control')); ?>
	</div>
	<div class="form-group">
		<label>Ma Sinh Vien:</label><br />
		<?php echo $this->Form->input('masinhvien', array('class'=>'form-control')); ?>
	</div>
	<div class="form-group">
		<label>Diem</label>
		<?php echo $this->Form->input('diem', array('class'=>'form-control')); ?>
	</div>
	<button id="linkUpdate" type="submit" class="btn btn-success">Save</button>
	<?php echo $this->Form->end();?>
</div>
</div>
</body>
</html>
