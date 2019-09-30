<?php
App::uses('Model', 'Model');
class Diem extends AppModel {
	public $diem = 'Diem';
	public $primaryKey = 'masinhvien';
	public  $belongsTo= array(
			'Monhoc' => array(
				'className' => 'Monhoc',
				'foreignKey' => 'mamonhoc',
			)
		);
}
?>
