<?php

$this->Paginator->options(array('url' => $this->passedArgs));
?>
<?php echo $this->Form->create('Sinhvien',array('url'=>'search'));?>
	<fieldset>
		<legend><?php __('Sinhvien Search');?></legend>
		<?php
		echo $this->Form->input('masinhvien');
		echo $this->Form->submit('Search');
		?>
	</fieldset>
<?php echo $this->Form->end();?>

<?php
	if(empty($posts)){
	echo 'khang';
	}else{
		echo "<table>";
		echo "<tr>";
		echo "<th>".$this->Paginator->sort("Id","id");
		echo "<th>".$this->Paginator->sort("Name","ten");
		echo "<th>".$this->Paginator->sort("Masinhvien","masinhvien");
		echo "</tr>";

		foreach($posts as $item){
			echo "<tr>";
			echo "<td>".$item['Sinhvien']['id']."</td>";
			echo "<td>".$item['Sinhvien']['ten']."</td>";
			echo "<td>".$item['Sinhvien']['masinhvien']."</td>";
			echo "</tr>";
		}
		echo "</table>";

		//---- Paging
		echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Shows the next and previous links

		echo " | ".$this->Paginator->numbers()." | "; //Shows the page numbers

		echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Shows the next and previous links

		echo " Page ".$this->Paginator->counter(); // prints X of Y, where X is current page and Y is number of pages
	}
?>
