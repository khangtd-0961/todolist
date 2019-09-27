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
	<h1>Quan LY Sinh Vien</h1>

	<table class="table">

		<button type="button" class="btn btn-success"><a href="<?php echo $this->Html->url(array('action' => 'add')); ?>">Link to action</a></button>
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>role</th>
			<th></th>
			<th></th>
			<th></th>

		</tr>
		</thead>
		<tbody>
		<tr>
			<?php foreach($users as $rows): ?>

			<td><?php echo $rows['User']['id']; ?></td>
			<td><?php echo $rows['User']['username']; ?></td>
			<td><?php echo $rows['User']['email']; ?></td>
			<td><?php echo $rows['User']['role']; ?></td>
			<td>
				<?php
				echo $this->Html->link(
					$rows['User']['username'],
					array('action' => 'view', $rows['User']['id'])
				);
				?>
			</td>
			<td>
				<?php
				echo $this->Html->link(
					'Edit',
					array('action' => 'edit', $rows['User']['id'])
				);
				?>
			</td>
			<td>
				<?php
				echo $this->Form->postLink(
					'Delete',
					array('action' => 'delete', $rows['User']['id']),
					array('confirm' => 'Are you sure?')
				);
				?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($rows);?>
		</tbody>
	</table>
	<div style="text-align:center;"> <?php
		// Đoạn này là hiển thị html phân trang, muốn hiển thị ở đâu thì copy vào ngay đó
		echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Hiện thj nút Previous
		echo " | ".$this->Paginator->numbers()." | "; //Hiển thi các số phân trang
		echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Hiển thị nút next
		echo " Page ".$this->Paginator->counter(); // Hiển thị tổng trang
		?></div>
</div>
</table>
</body>
</html>
