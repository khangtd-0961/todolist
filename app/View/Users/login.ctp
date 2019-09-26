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
	<?php echo $this->Flash->render('auth'); ?>
	<?php echo $this->Form->create('User'); ?>
 <fieldset style="border:1px solid black; margin:20px; padding:20px;">
    <h1 style="text-align: center;">Login</h1>
 <div class="form-group">
 <?php echo $this->Form->input('username',array('class'=>"form-control", "placeholder"=>"Username", "autofocus"));?>
 </div>
 <div class="form-group">
 <?php echo $this->Form->input('password', array('type'=>'password',"class"=>"form-control", "placeholder"=>"Password"));?>
 </div>
 <?php echo $this->Form->button('Login',array('class'=>'btn btn-success'));?>
	 <a style="text-align: center; float: right;" href="<?php echo $this->Html->url(array('controller' => 'users' , 'action' => 'add'));?>">create </a>
 </fieldset>


</div>
</body>
</html>
